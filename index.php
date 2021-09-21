<?php
    include_once("assets/templates/header.php");
?>
    <main>
        <div class="title-container">
            <h1>DevBlog</h1>
            <p>O seu blog de programação!</p>
        </div>
        <div class="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
                    <img src="<?= $BASE_URL ?>assets/img/<?= $post["img"] ?>" alt="<?= $post["title"] ?>">
                    <h2>
                        <a href="<?= $BASE_URL?>/assets/data/post.php?id=<?= $post['id'] ?>"><?= $post["title"] ?></a>
                    </h2>
                    <p>
                        <a href="<?= $BASE_URL?>/assets/data/post.php?id=<?= $post['id'] ?>"><?= $post["description"] ?></a>
                    </p>
                    <div class="tags-container">
                        <?php foreach($post["tags"] as $tag): ?>
                            <div class="tag-box">
                                <a href="#"><?= $tag; ?></a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
<?php
    include_once("assets/templates/footer.php");
?>