<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body> <?php body_class(); ?>

<nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"></a>
        <img 
        src="<?php ?>/assets/img/logo.png" 
        alt="Logo"
        width="30"
        height="24"
        class="d-inline-block align-text-top">
        Bootstrap
        </a>
    </div>
</nav>
</body>
</html>