<?php

include_once("templates/header.php");
include_once("data/posts.php");
include_once("data/categories.php");

if(isset($_GET['id'])){
    $post_id = $_GET['id'];
    $current_post;

    foreach($posts as $post){
        if($post['id'] == $post_id){
            $current_post = $post;
        }
    }
}
?>
    <main class="post-containers">
        <div class="container">
            <h1 id="main-title"><?= $current_post['title']?></h1>
            <p id="post-description">
                <?= $current_post['description']?>
            </p>
            <div class="img-container">
                <img src="<?=$BASE_URL?>/img/<?=$current_post['img']?>" alt="<?= $current_post['title']?>">
            </div>
            <p class="post-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis repellendus quisquam cum excepturi repellat sit, laboriosam iste natus nam aliquam iure error quaerat deleniti odio tenetur praesentium voluptatum quam consequuntur?</p>
                <p>Impedit, dicta! Molestias hic, consectetur ratione mollitia pariatur delectus tempore unde itaque sapiente veritatis natus quaerat voluptate blanditiis ipsum explicabo nesciunt autem? Repellat atque maxime possimus blanditiis impedit, libero aliquam!</p>
                <p>Ad sunt praesentium ab earum consequatur deserunt aperiam laborum odit animi debitis modi enim quidem autem aliquid aspernatur amet corporis porro quam, asperiores qui. Explicabo eum quo repellendus aperiam inventore?</p>
                <p>Iste hic dolorem atque. Adipisci ab asperiores saepe, nobis, perferendis cum nostrum commodi sapiente vel a qui, quas pariatur molestiae vero. Quos iure, dolorum neque quae amet iste voluptates similique?</p>
                <p>Odio impedit architecto soluta deserunt id temporibus, est nesciunt enim porro asperiores, inventore recusandae veniam ducimus sequi, a similique praesentium nisi quaerat placeat quis qui molestiae. Minima maxime delectus veniam!</p>
            </p>
        </div>
    </main>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php
                foreach($current_post['tags'] as $tag):
            ?>
                <li>
                    <a href=""><?= $tag?>
                    </a>
                </li>
            <?php
                endforeach;
                ?>
        </ul>
        <h3 id="categories-title">categories</h3>
        <ul id="categories-list">
            <?php
                foreach($categories as $categorie):
            ?>
                <li>
                    <a href=""><?= $categorie?>
                    </a>
                </li>
            <?php
                endforeach;
            ?>
        </ul>

    </aside>
<?php

include_once("templates/footer.php");

?>