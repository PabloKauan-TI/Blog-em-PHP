<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $postAtual;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $postAtual = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div id="content-container">
            <h1 id="main-title"><?= $postAtual['title']?></h1>
            <p id="post-descriprion"><?=$postAtual['description']?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>images/<?= $postAtual['img'] ?>" alt="<?= $postAtual['title']?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi tenetur voluptatem commodi optio. Ipsa officia repellendus nostrum, eos iste ex libero blanditiis nemo corrupti error doloribus quisquam vel necessitatibus commodi!
            Illo modi, quod vero unde assumenda totam, placeat neque quisquam molestias, quos aliquid accusamus dicta ab! Reiciendis similique omnis nostrum veritatis placeat ea nulla, totam cum maiores atque vel fuga!
            Fugit nisi illo modi temporibus culpa harum veniam atque eos, perferendis saepe porro, quas, eveniet ullam? Esse iste corrupti, minus odit atque hic provident repudiandae facere illum aliquid animi cumque!
            Suscipit earum at laborum, perferendis dolorum maxime, odio fuga, atque commodi architecto autem sed repudiandae incidunt accusamus aperiam. Sint quaerat quo facere odit eaque quidem vitae facilis soluta molestias fugiat.
            Nemo ipsam velit inventore eveniet, earum porro, sint fugiat quaerat praesentium reiciendis mollitia non nulla ipsum omnis necessitatibus accusantium? Hic quod id, mollitia placeat accusantium dignissimos consequuntur ipsum autem vitae?</p>
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($postAtual['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categories</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php");
?>