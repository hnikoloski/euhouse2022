<?php
$pageID = get_option('page_on_front');
// getting home page id because for some reason acf does not work here without ID -.-
?>

<div id="share-ideas" class="page-padding-x">
    <div class="container">
        <div class="col">
            <h3 class="animated text-animation add-active"><?= the_field('title_ideas', $pageID) ?></h3>
            <?= the_field('sub_title_ideas', $pageID); ?>
            <a href="#" target="_blank" class="btn btn-blue">View More <i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>