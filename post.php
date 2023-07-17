<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])) {
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) { 

            if($post['id'] == $postId) {
                $currentPost = $post;

            }

        }

    }
?>

   <main id="post-container">
    <div class = "content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?=$currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab accusamus rem, doloremque expedita libero sit aspernatur exercitationem aut, repellendus minus magnam? Distinctio veniam eum, omnis quae sed quas accusantium quia?
        Ut deleniti corporis ad culpa nam enim, illo laboriosam suscipit id sunt, vitae beatae adipisci labore soluta voluptates? Reprehenderit dolore ea consequuntur dignissimos aliquam fugiat excepturi nulla pariatur! Labore, delectus.
        Porro excepturi eveniet minus! Hic dolorum alias tenetur laudantium voluptates aliquam delectus dicta corrupti. Velit magni quod perferendis exercitationem officiis aperiam doloribus eaque voluptatibus, aspernatur, delectus architecto beatae quisquam quam.
        Aperiam commodi, fuga quas nisi dicta nihil consequatur nobis perferendis similique repellendus sapiente esse a cupiditate! Sunt fugiat rerum veritatis asperiores dolorum pariatur, incidunt praesentium possimus voluptate quod voluptatem non!
        Optio ab vel ipsum numquam, in nobis nam dignissimos illo quasi perferendis odio enim, aliquid sunt blanditiis nihil dolorem architecto? Dolore assumenda mollitia libero cupiditate tenetur, quasi beatae itaque sed.</p>
    </div>

  
   <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul class="tag-list">
        <?php foreach($currentPost['tags'] as $tag): ?>
           <li> <a href="#"><?= $tag ?></a> </li>

        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-lis">
        <?php foreach($categories as $category): ?>
            <li> <a href="#"><?= $category ?></a> </li>

        <?php endforeach; ?>
    </ul>
   </aside>
</main>
<?php
    include_once("templates/footer.php")
?>

</html>