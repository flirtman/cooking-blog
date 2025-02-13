<section class="video-gallery" id="videos-recipes">
    <div class="container">
        <div class="video-gallery-header">
            <h2>Videos Recipes</h2>
            <p>These recipes are here not only to show you how delicious meals can be simple in preparation, but also to bring you good vibes and a cheerful mood. So don’t forget to bring your sense of humor along. Enjoy!</p>
        </div>
        <div class="grid-wrapper">
            <?php
            if(!empty($recipes)) {
                foreach ($recipes as $recipe) {
                    ?>
                    <div class="video-card" data-src="<?= $recipe['video_link'] ?>">
                        <img src="assets/imgs/video-thumbs/<?= $recipe['img'] ?>" alt="">
                        <p><?= $recipe['title'] ?></p>
                    </div>

                    <?php
                }
            } else {
                echo "wrong";
            }

            ?>
        </div>
    </div>
</section>

<div class="light-box-video">
    <div class="light-box-video-container">
        <div class="closing-container">
            <button class="close-video-gallery">X</button>
        </div>
        <iframe width="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

