<?php 
  include_once('templates/header.php');

  if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
         if($post['id'] == $postId){
             $currentPost = $post;
         }
    }
  }

?>
    <main id="posts-container">
        <div class="content-container">
            <h1 id="main-title"><?=$currentPost['title']?></h1>
            <p id="post-description"><?=$currentPost['description']?></p>
             <div class="img-container">
                 <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?=$currentPost['title']?>">
             </div>
             <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Officia dolores voluptates saepe consequuntur corrupti natus fugiat ex adipisci!
                Doloremque nemo ducimus inventore dolore dolorum error. Nemo quisquam id beatae at.
                Obcaecati nulla perspiciatis et cupiditate pariatur voluptatum quas nesciunt molestiae dolor excepturi.
                Aliquid repellat maiores aperiam eaque modi, neque cumque harum ipsam, commodi laudantium dicta.
                Animi laborum nemo dignissimos illum.
                Quos sit maxime provident dolores magnam mollitia dolorum quam, ipsam error nobis neque porro itaque alias 
                nulla repellat atque ut, natus voluptatum delectus deleniti quod. Quo, nam. Tempora, vel corrupti!
                Ea, nam ab! Pariatur debitis nihil quas, exercitationem obcaecati sint. Autem, maiores. In porro minima 
                maiores vel, natus adipisci dicta voluptates accusantium dolore commodi dolorem ad laudantium! Voluptatem, 
                totam atque!
                Perspiciatis cumque alias perferendis amet facilis. Nostrum dicta voluptatibus repellendus beatae
                consequuntur dolorem magnam? Iure doloremque dolorem officiis temporibus animi delectus quae ipsam a. 
                Vitae numquam earum quibusdam explicabo dolorum?
            </p>
             <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                 Officia dolores voluptates saepe consequuntur corrupti natus fugiat ex adipisci!
                Doloremque nemo ducimus inventore dolore dolorum error. Nemo quisquam id beatae at.
                Obcaecati nulla perspiciatis et cupiditate pariatur voluptatum quas nesciunt molestiae dolor excepturi.
                Aliquid repellat maiores aperiam eaque modi, neque cumque harum ipsam, commodi laudantium dicta.
                Animi laborum nemo dignissimos illum.
                Quos sit maxime provident dolores magnam mollitia dolorum quam, ipsam error nobis neque porro itaque alias 
                nulla repellat atque ut, natus voluptatum delectus deleniti quod. Quo, nam. Tempora, vel corrupti!
                Ea, nam ab! Pariatur debitis nihil quas, exercitationem obcaecati sint. Autem, maiores. In porro minima 
                maiores vel, natus adipisci dicta voluptates accusantium dolore commodi dolorem ad laudantium! Voluptatem, 
                totam atque!
                Perspiciatis cumque alias perferendis amet facilis. Nostrum dicta voluptatibus repellendus beatae
                consequuntur dolorem magnam? Iure doloremque dolorem officiis temporibus animi delectus quae ipsam a. 
                Vitae numquam earum quibusdam explicabo dolorum?
            </p>
        </div>
        <asside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tags-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </asside>
    </main>
<?php 
  include_once('templates/footer.php');
?>