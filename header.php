<?php
$description = "A Cozumel Estética, é uma clínica de beleza com o objetivo de promover o bem estar aos clientes em um ambiente aconchegante. Com mais de 6 anos no mercado conta com mais de 40 tratamentos estéticos entre massagens e protocolos exclusivos da marca desenvolvidos pela equipe técnica de treinamento, contamos com depilação a laser e área médica. Prezamos um atendimento de qualidade com profissionais qualificados em um ambiente climatizado, com salas individualizadas.";

$title = "Cozumel Estética e Bem-estar";
?>

<!doctype html>
<html lang="pt-BR" itemscope itemtype="https://schema.org/WebSite">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SCHEMA.ORG -->
    <meta itemprop="name" content="<?= $title; ?>">
    <meta itemprop="description" content="<?= $description; ?>">
    <meta itemprop="image" content="<?= get_template_directory_uri(); ?>/_cdn/img/post.jpg">
    <meta itemprop="url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

    <!-- OPEN GRAPH -->
    <meta property="og:locale" content="pt_BR">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:site_name" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description; ?>">
    <meta property="og:image" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta property="og:type" content="website">

    <!--CANONICAL-->
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <link rel="home" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

    <!-- DESCRIPTION -->
    <meta name="description" content="<?= $description; ?>">

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- AUTHOR -->
    <meta name="author" content="Goognet Solução Digital - https://www.goognet.com.br">

    <!-- FACEBOOK -->
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $title ?>">
    <meta property="og:description" content="<?= $description; ?>">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/_cdn/img/post.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="pt_BR">
    <meta property="article:author" content="https://www.facebook.com/goognetsolucao/">
    <meta property="article:publisher" content="https://www.facebook.com/goognetsolucao/">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta name="twitter:title" content="<?= $title ?>">
    <meta name="twitter:description" content="<?= $description; ?>">
    <meta name="twitter:image" content="<?= get_template_directory_uri(); ?>/_cdn/img/post.jpg">
    <meta name="twitter:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

    <!-- REGION -->
    <meta name="geo.region" content="BR-SP">
    <meta name="geo.placename" content="S&atilde;o Paulo">
    <meta name="geo.position" content="-23.553541;-46.652957">
    <meta name="ICBM" content="-23.553541, -46.652957">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="_cdn/img/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= get_template_directory_uri(); ?>/_cdn/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--TITLE-->
    <title><?= $title; ?></title>

    <!--recptcha-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php wp_head(); ?>
</head>

<body id="home" <?php body_class(); ?>>

    <!--header-->
    <header class="header">

        <!--navbar-->
        <div class="header__navbar">
            <!--container-->
            <div class="container">
                <!-- brand -->
                <a href="<?= get_home_url(); ?>">
                    <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-header.svg" alt="Logo Cozumel Estética e Bem-estar" loading='lazy'>
                </a>

                <!-- toggle -->
                <div class="header__navbar__section">
                    <div class="header__navbar__section__toggle">
                        <div class="header__navbar__section__toggle__bar"></div>
                        <div class="header__navbar__section__toggle__bar"></div>
                        <div class="header__navbar__section__toggle__bar"></div>
                    </div>
                    <!-- nav -->
                    <nav class="header__navbar__section__nav">
                        <?php wp_nav_menu(array('theme_location' => 'header-home', 'container_class' => '')); ?>
                        <a href="<?= get_permalink(get_page_by_title('Franquia')); ?>" class="btn btn--outline-theme-white" target="_blank">Seja um Franqueado</a>
                    </nav>
                </div>
            </div>
            <!--end of container-->
        </div>
        <!--end of navbar-->
    </header>
    <!--end of header-->