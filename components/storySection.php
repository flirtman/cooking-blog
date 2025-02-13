<?php
if ($resultStory && $resultStory->num_rows > 0) {
$story = $resultStory->fetch_assoc();
$storyImages = explode(',', $story['imgs']);
?>
<section class="story-section">
    <div class="container">
        <ul class="breadcrumbs">
            <li><a href="index.php">Home / </a></li>
            <li><a href="index.php#el-capitan's-tales">El Capitan's Tales / </a></li>
            <li><span><?= $story['title'] ?></span></li>
        </ul>
    </div>
    <div class="container">
        <div class="row md-flex-direction-column">
                <div class="col">
                    <h2><?= $story['title'] ?></h2>
                    <div>
                        <?= $story['content'] ?>
                    </div>
                </div>
                <div class="col">
                    <div class="img-wrapper">
                        <img src="<?= $storyImages[0] ?>" alt="">
                    </div>
                    <ul class="thumbs">
                        <?php

                        if(!empty($storyImages)) {
                            foreach ($storyImages as $key => $img) { ?>
                                <li class="<?= $key === 0 ? 'active' : '' ?>"><img src="<?= $img ?>" alt=''></li>
                        <?php }
                        }
                        ?>
                    </ul>
                </div>
        </div>
    </div>
</section>
<?php } else {
    echo "<section><div class='container'>
        <p>No story found with the title '$title'.</p>
        </div></section>";
} ?>
