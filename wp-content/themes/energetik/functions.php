<?php 
function dump($Array) {
    echo "<pre>";
    print_r($Array);
    echo "</pre>";
}

function SetUp() {
    add_theme_support("post-thumbnails");
    register_nav_menus([
        "header" => "Header Pages",
        "footer" => "Footer Pages",
    ]);
    wp_enqueue_style("style", get_stylesheet_uri());
}
add_action("after_setup_theme", "SetUp");
?>