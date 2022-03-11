<!DOCTYPE html>
<html <?php //language_attributes(); 
        ?>>

<head>
    <meta charset="<?php //echo bloginfo('charset'); 
                    ?>" />
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="<?php //s3_nome_agencia(); 
                                    ?>">
    <meta name="description" content="<?php //echo get_bloginfo('description'); 
                                        ?>" />
    <meta name="keywords" content="<?php //s3_keywords(); 
                                    ?>" />
    <meta name="copyright" content="© 2022 <?php //s3_nome_agencia(); 
                                            ?>" />
    <meta name="robots" content="all" />
    <meta name="robots" content="max-image-preview:standard" />
    <meta name="revisit-after" content="7 days" />
    <meta name="theme-color" />
    <meta name="msapplication-navbutton-color" />
    <meta name="msapplication-TileColor" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <title><?php //s3_title(); 
            ?></title>

    <link rel='stylesheet' href='assets/css/app.css' type='text/css' media='all' />

    <base href="<?php //echo home_url(); 
                ?>" />

    <?php //wp_head(); 
    ?>
</head>

<body <?php //body_class(); 
        ?>>

    <?php //wp_body_open(); 
    ?>

    <header class="">
        <section class="container">
            <nav class="navbar navbar-expand-lg justify-content-between align-items-center">
                <div>
                    <a href="<?php //echo home_url(); ?>" title="<?php //s3_logo_title(); ?>" title="<?php //echo bloginfo('name'); ?>">
                       <?php include("assets/img/logo.svg");?>
                    </a>
                </div>
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarCentralLibras" aria-controls="navbarCentralLibras" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="btn-toggle">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse main-menu" id="navbarCentralLibras">
                    <ul class="nav justify-content-center w-100 flex-lg-row flex-column">
                        <li class="nav-item active">
                            <a class="nav-link" href="tpl-home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#a-central">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="archive-servicos.php">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contato">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Contato</a>
                        </li>
                    </ul>
                </div>
                <div class="d-lg-flex d-none social">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#" target="_blank" title="Facebook">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#" target="_blank" title="Facebook">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link pl-0" href="#" target="_blank" title="Facebook">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
    </header>