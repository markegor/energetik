<?php
$Posts = get_posts([
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
]);
foreach ($Posts as $Index => $Value) {
?>
<div class="news-post mb-5 d-flex flex-column align-items-center">
    <h3 class="news-post-title mb-3"><a href="<?php echo $Value->guid ?>"><?php echo $Value->post_title ?></a></h3>
    <div class="collapse news-post-content" id="collapseExample-<?php echo $Index ?>">
        <?php echo $Value->post_content ?>
    </div>
    <img class="news-post-expand mt-3 collapsed" data-bs-toggle="collapse" href="#collapseExample-<?php echo $Index ?>" role="button" aria-expanded="false" aria-controls="collapseExample" src="<?php echo get_template_directory_uri()?>/img/expand.png" ?>
</div>
<?php
}
?>