<section class="stories-section" id="el-capitan's-tales">
    <div class="container">
        <div class="stories-header">
            <h2>El Capitan's Tales</h2>
            <p>Discover a unique collection where each dish is paired with a poetic sonnet and stunning visuals. Dive into the artistry of flavors and words, as El Capitan shares his culinary creations and the stories they tell.</p>
        </div>

        <div class="grid-wrapper">
            <?php
                if(!empty($stories)) {
                    foreach($stories as $story) { ?>
                <a href="story.php?s=<?= str_replace(" ", "-", $story['title']) ?>" class="story-item">
                    <img src="<?= $story['thumb'] ?>" alt="">
                    <p><?= $story['title'] ?></p>
                </a>
            <?php }
                }
            ?>
        </div>
    </div>
</section>

