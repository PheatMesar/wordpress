<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Cosine HTML Template</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Bootstrap  -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/bootstrap.css" >

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/responsive.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/color1.css" id="colors">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ) ?>/css/animate.css">

    <!-- Favicon and touch icons  -->
    <link href="<?php echo esc_url( get_template_directory_uri() ) ?>/icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed" sizes="48x48">
    <link href="<?php echo esc_url( get_template_directory_uri() ) ?>/icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="<?php echo esc_url( get_template_directory_uri() ) ?>/icon/favicon.png" rel="shortcut icon">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body class="header-sticky page-loading">
<div class="loading-overlay">
</div>

<!-- Boxed -->
<div class="boxed">
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="flat-address">
                    <div class="social-links">
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                    <div class="custom-info">
                        <span>Have any questions?</span>
                        <i class="fa fa-reply"></i>themesflat@gmail.com
                        <i class="fa fa-phone"></i>1 800 232 3485
                    </div>
                </div><!-- /.flat-address -->
            </div><!-- /.col-md-8 -->
            <div class="col-md-4">
                <div class="top-navigator">
                    <ul>
                        <li><a href="#">Pages</a>
                            <ul>
                                <li><a href="search.html">Search Results</a></li>
                                <li><a href="404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li><a href="portfolio.html">Case Studies</a>
                            <ul>
                                <li><a href="portfolio.html">Layout 1</a></li>
                                <li><a href="portfolio-masonry.html">Layout 2</a></li>
                                <li><a href="portfolio-grid-alt.html">Layout 3</a></li>
                                <li><a href="portfolio-single.html">Single Layout 1</a></li>
                                <li><a href="portfolio-single-v2.html">Single Layout 2</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">News</a>
                            <ul class="right-sub-menu">
                                <li><a href="blog.html">List Layout</a></li>
                                <li><a href="blog-v1.html">Grid Layout</a></li>
                            </ul>
                        </li>
                        <li><a href="shop.html">Shop</a>
                            <ul class="right-sub-menu">
                                <li><a href="shop.html">Products</a></li>
                                <li><a href="shop-detail.html">Products Single</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.top-navigator -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.top -->

<!-- Header -->
<header id="header" class="header clearfix">
    <div class="header-wrap clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="logo" class="logo">
                        <a href="index.html">
                            <img src="<?php echo esc_url( get_template_directory_uri() ) ?>/images/logo.png" alt="images">
                        </a>
                    </div><!-- /.logo -->
                    <div class="btn-menu">
                        <span></span>
                    </div><!-- //mobile menu button -->

                    <div class="nav-wrap">
                        <nav id="mainnav" class="mainnav">
                           <?PHP  $args = array(
                               'menu'            => 'primary',
                               'container'       => '',
                               'container_class' => '',
                               'container_id'    => '',
                               'menu_class'      => 'menu',
                               'menu_id'         => '',
                               'theme_location'  => 'primary',
                               'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                           );

                           wp_nav_menu( $args );
                           ?>
                        </nav><!-- /.mainnav -->
                    </div><!-- /.nav-wrap -->
                </div><!-- /.col-md-9 -->
                <div class="col-md-3">
                    <div class="top-search">
                        <div class="widget widget_search">
                            <form class="search-form">
                                <input type="search" class="search-field" placeholder="Search …">
                                <input type="submit" class="search-submit">
                            </form>
                        </div>
                    </div>
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.header-inner -->
</header><!-- /.header -->
