<!DOCTYPE html>
<html <?php language_attributes(); ?>> <!--this is the language being used -->

<head>
    <meta charset="<?php bloginfo("charset"); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>  <!--this gives wordpress the power to allow any added pulgins in the header to work-->
</head>

<body <?php body_class(); ?>> <!-- THIS WILL ALLOW US TO TARGET DIFFERENT PAGES WITH CSS MORE EASILY -->

    <div class="container"> <!--this starts the main container and closes on the footer page-->
    
    <!--site header-->
    <header class="site-header">
        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo("name"); ?></a></h1>
        <h5><?php bloginfo("description"); ?></h5>
    </header>

