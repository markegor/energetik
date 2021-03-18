<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ефектів енерджи солюшинс</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/header.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/css/content.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/js/header.js"></script>
</head>
<body>
    <?php
        wp_footer();
    ?>
    <?php
        get_header();
    ?>
    <?php
        $Current = "";
        if(is_front_page()) {
            $Current = "front";
        } else if(is_page("news")) {
            $Current = "news";
        } else if(is_page("portfolio")) {
            $Current = "portfolio";
        } else if(is_page("contacts")) {
            $Current = "contacts";
        } else if(is_404()) {
            $Current = "404";
        }
    ?>
    <div id="content" class="<?php echo $Current ?>">
        <div class="container content-content">
            <?php
            if($Current === "news") {
                get_template_part('templates/news');
            } else if($Current === "contacts") {
                get_template_part('templates/contacts');
            } else if($Current === "404") {
                echo '<h1 class="mt-5 mb-0 text-center" style="font-size: 8rem;">404</h1>';
            }

            the_content();
            ?>
        </div>
    </div>
</body>
</html>