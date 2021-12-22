<?php
?>
    <!doctype html>
    <html lang="en">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    </head>
    <title>
        <?php
        if (is_front_page()) {
            bloginfo('name');
        } else {
            wp_title('');
        }
        ?>
    </title>

<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css?v=9">


    <link rel="icon" href="<?php echo get_field('site_favicon', 'options'); ?>" type="image/x-icon"/>
    <link rel="shortcut icon" href="<?php echo get_field('site_favicon', 'options'); ?>" type="image/x-icon"/>
    </head>


<body <?php body_class(); ?>>

    <div class="fragment_79525 header">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-2 logo-wrap">
                    <div class="header-wrap">
                        <div class="header-logo"><a href="<?php echo get_home_url(); ?>"> <img
                                        src="<?php echo get_field('logo', 'options'); ?>" alt="">
                            </a></div>
                    </div>
                </div>
                <div class=" col-lg-8 nav-wrap navbar-menu justify-content-end navbar">
                    <button class="navbar-toggler collapsed mr-3" type="button" data-toggle="collapse"
                            data-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span> </span>
                        <span> </span>
                        <span> </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarMain">
                        <div class="main-menu">
                            <?php
                            wp_nav_menu(array(
                                    'theme_location' => 'primary',
                                    'menu' => 'primary',
                                    'depth' => 1,
                                    'container' => 'ul',
                                    'menu_class' => 'navbar-blank navbar-nav navbar-site',
                                    'walker' => new wp_bootstrap_navwalker()
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
                <a href="/oeffnungszeiten" class="col col-2 opening-time-wrap">
                    <div class="opening-times">
                        <svg viewbox="0 0 512 512">
                            <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3 c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1 C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462 H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41 c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"></path>
                        </svg>
                        <div class="portlet">
                            <div class="portlet-boundary portlet-boundary_es_asvito_liferay_openingtimes_OpeningTimesPortlet_ portlet-static portlet-static-end portlet-barebone"
                                 id="p_p_id_es_asvito_liferay_openingtimes_OpeningTimesPortlet_INSTANCE_dtfj_">
                                <span id="p_es_asvito_liferay_openingtimes_OpeningTimesPortlet_INSTANCE_dtfj"></span>
                                <section class="portlet"
                                         id="portlet_es_asvito_liferay_openingtimes_OpeningTimesPortlet_INSTANCE_dtfj">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <div id="_es_asvito_liferay_openingtimes_OpeningTimesPortlet_INSTANCE_dtfj_openingTimes"
                                                     class="openingTimes"> <?= get_current_opening_time() ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
<?php if (is_front_page()) : ?>
    <div class="portlet">
        <div class="portlet-boundary portlet-boundary_es_asvito_header_banner_web_portlet_HeaderBannerPortlet_ portlet-static portlet-static-end header-banner-portlet portlet-barebone"
             id="p_p_id_es_asvito_header_banner_web_portlet_HeaderBannerPortlet_INSTANCE_fuie_"><span
                    id="p_es_asvito_header_banner_web_portlet_HeaderBannerPortlet_INSTANCE_fuie"></span>
            <section class="portlet"
                     id="portlet_es_asvito_header_banner_web_portlet_HeaderBannerPortlet_INSTANCE_fuie">
                <div class="portlet-content">
                    <div class=" portlet-content-container">
                        <div class="portlet-body">
                            <div id="link-banner-wrapper">
                                <div class="img-wrapper">
                                    <div id="_es_asvito_header_banner_web_portlet_HeaderBannerPortlet_INSTANCE_fuie_-carousel"
                                         class="">
                                        <div class="item">
                                            <img class="img-fluid carousel-img"
                                                 src="<?= get_field('home_image', 'options') ?>"
                                                 data-original="<?= get_field('home_image', 'options') ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<?php endif; ?>