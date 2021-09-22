<?php
    include_once("assets/templates/header.php");

    if(isset($_GET["id"])){

        $postId = $_GET["id"];
        $currentPost;

        foreach($posts as $post){
            if($post["id"] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
    <main id="post-container">
        <div class="post-content">
            <h1><?= $currentPost["title"]; ?></h1>
            <p><?= $currentPost["description"] ?></p>
            <div class="post-image">
                <img src="<?= $BASE_URL ?>/assets/img/<?= $currentPost["img"] ?>" alt="<?= $currentPost["title"] ?>">
            </div>
            <div class="post-paragraph">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Error distinctio dignissimos, voluptates neque minus velit odio nam officiis perferendis quam sunt amet consequatur facilis culpa cum magnam similique mollitia magni.
                    Molestiae consequuntur ab ipsum doloremque officiis, similique minus explicabo, molestias eaque ipsam voluptas harum quisquam dignissimos dolorem tempore quaerat reiciendis! Cupiditate voluptatibus quod vero, fugiat nulla temporibus aspernatur molestias hic.
                    Cumque aliquid temporibus, laborum totam minima voluptatum incidunt aspernatur doloremque quia laudantium et molestias dicta minus quidem natus repudiandae, autem, eius facilis. Quam iusto enim corrupti? Distinctio neque minima dolores!
                    Quos necessitatibus sit deleniti fugiat suscipit incidunt, saepe commodi, rem ea perspiciatis earum eligendi enim ex omnis aliquid dolorum iste repellat aut maxime aliquam laborum consequuntur? Corporis id maiores dignissimos?
                    Consequatur tempora repellat veniam facere voluptate quod maxime sunt! Nihil, ullam nobis. Dolore, voluptas repellat laudantium facilis quidem ullam commodi numquam reiciendis architecto? Neque autem deserunt soluta? Delectus, repellendus ea.
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos itaque ullam laborum placeat minus aperiam cum inventore cupiditate facere, amet libero aut odio asperiores laboriosam nostrum eligendi molestiae vitae est.
                    Voluptatum cumque aperiam tempora eos laborum, hic perferendis at laboriosam voluptas, ut in asperiores reprehenderit qui dignissimos rerum! Facere, perspiciatis fuga! Mollitia illo possimus libero fugiat vero veniam aliquid perferendis.
                    Odit id, eum voluptates laborum magnam asperiores? Fuga ipsum ducimus obcaecati, perferendis illum aliquid, vero animi saepe voluptas cupiditate maiores harum quos unde perspiciatis rem fugit tempore dolores adipisci quo.
                    Impedit harum earum nihil magni reiciendis quibusdam voluptas doloribus iure! Asperiores numquam modi, in ab veniam recusandae totam ex, adipisci ut quisquam similique dolore quasi cupiditate, iusto molestias ullam quo?
                    Aut vero itaque cum! Eaque voluptas quidem ipsum autem, mollitia aliquid facilis quibusdam quia magnam necessitatibus temporibus harum obcaecati debitis. Dignissimos a aspernatur eos delectus repellendus mollitia iusto ut quam.
                    Ipsum culpa eius corporis ducimus architecto aut nulla deserunt commodi voluptatibus non, quam nobis, voluptatum a temporibus, libero praesentium quibusdam distinctio. Eius nemo perferendis deleniti tempore eveniet architecto, eum exercitationem.
                </p>
            </div>
        </div>
        <aside id="nav-container">
            <h3>Tags</h3>
            <div class="tags">
                <ul>
                    <?php foreach($currentPost["tags"] as $tag): ?>
                        <li><a href="#"><?= $tag ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <h3>Linguagens</h3>
            <div class="tags">
                <ul>
                    <?php foreach($linguagens as $category): ?>
                        <li><a href="#"><?= $category ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </aside>
    </main>
<?php
    include_once("assets/templates/footer.php");
?>