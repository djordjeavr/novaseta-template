<?php /* Template Name: Startseite */ ?>

<?php get_header();
$section_1 = get_field('geschafte');
$section_2 = get_field('dienstleistungen');
?>

    <!-- start INFO  -->
    <section class="bg- px-3 py-3" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-zilw">
                        <div class="py-3"></div>
                    </div>
                    <div id="fragment-0-ioat">
                        <div class="component-heading-3 pb-2">
                            <h3>
                                <div>
                                    <div style="text-align:center"> News &amp; Events</div>
                                </div>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="fragment-924247-jsff">
            <div class="blog-section">
                <div class="container blog-wrap">
                    <div class="row">
                        <div class="col col-12">
                            <div class="portlet">
                                <div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_ portlet-static portlet-static-end portlet-asset-publisher portlet-barebone"
                                     id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_jsff_">
                                    <span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_jsff"></span>
                                    <section class="portlet"
                                             id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_jsff">
                                        <div class="portlet-content">
                                            <div class=" portlet-content-container">
                                                <div class="portlet-body">
                                                    <?php
                                                    // the query
                                                    $the_query = new WP_Query(array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 3,
                                                        'orderby' => 'modified',
                                                        'no_found_rows' => true,
                                                    ));
                                                    ?>
                                                    <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
                                                        <?php $title_post = strip_tags($post->post_title);
                                                        $content_post = strip_tags($post->post_content); ?>
                                                        <div class="col-lg-4 col-md-6">
                                                            <div class="card"><p style="display: none;"></p>
                                                                <div class="card-header">
                                                                    <div class="aspect-ratio aspect-ratio-8-to-3"><a
                                                                                href="/<?= $post->post_name ?>">
                                                                            <img style="width:100%"
                                                                                 class="aspect-ratio-item-center-middle aspect-ratio-item-fluid"
                                                                                 src="<?= get_field('post_image') ?>"
                                                                            >
                                                                        </a></div>
                                                                </div>
                                                                <div class="card-body widget-topbar">
                                                                    <div class="autofit-row card-type"> <?= get_the_category($post->ID)[0]->name ?></div>
                                                                    <div class="autofit-row card-title">
                                                                        <div class="autofit-col autofit-col-expand">
                                                                            <h3 class="title"><a class="title-link"
                                                                                                 href="/<?= $post->post_name ?>"><?php echo substr($title_post, 0, 100) ?></a>
                                                                            </h3></div>
                                                                    </div>
                                                                    <p class="widget-resume"></p>
                                                                    <p><?php echo substr($content_post, 0, 344) ?></p>
                                                                    <p></p>
                                                                    <div class="autofit-row widget-metadata">
                                                                        <div class="autofit-col autofit-col-expand">
                                                                            <div class="autofit-row">
                                                                                <div class="autofit-col autofit-col-expand">
                                                                                    <div class="display-date">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg- px-3 py-3" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-khjb">
                        <div class="compontent-link-center text-center pb-4">
                            <div><a href="<?php echo get_home_url(); ?>/news-events/" class="btn btn-primary">Mehr News &amp; Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="fragment-924250-dqcq">
            <section id="geschaefte">
                <h3>
                    <div> Geschäfte</div>
                </h3>
            </section>
        </div>
    </section>
    <section class="bg-white px-3 py-3" style="">
        <div class="container px-1">
            <div class="row ">
                <div class="col col-12 d-flex flex-wrap justify-content-center p-0">
                    <?php if ($section_1): ?>
                        <?php foreach ($section_1 as $index => $item): ?>
                            <div id="fragment-924238-pnvp-<?= $index ?>" class="company-card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div class="image-1"><img src="<?= $item['image'] ?>">
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="hover-title"> <?= $item['title'] ?></div>
                                            <div class="hover-phone">
                                                <div><a href="tel:<?= $item['phone'] ?>"
                                                        target="">&nbsp;<?= $item['phone'] ?></a>&nbsp;&nbsp;
                                                </div>
                                            </div>
                                            <div class="hover-link"><a href="<?= $item['site_link'] ?>"
                                                                       target="_blank">
                                                    <?php if (substr($item['site_link'], 0, 8) != "https://"):
                                                        echo str_replace("http://", "", $item['site_link']);
                                                    else:
                                                        if (strpos($item['site_link'], "www.") == false):
                                                            echo strtok(str_replace("https://", "www.", $item['site_link']), '/');
                                                        else:
                                                            echo strtok(str_replace("https://", "", $item['site_link']), '/');
                                                        endif;
                                                    endif;
                                                    ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="bg- px-3 py-3" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-hewo">
                        <div class="py-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div id="fragment-924250-dqcq">
            <section id="geschaefte">
                <h3>
                    <div>Dienstleistungen</div>
                </h3>
            </section>
        </div>
    </section>
    <section class="bg-white px-3 py-3" style="">
        <div class="container px-1">
            <div class="row ">
                <div class="col col-12 d-flex flex-wrap justify-content-center p-0">
                    <?php if ($section_2): ?>
                        <?php foreach ($section_2 as $index => $item): ?>
                            <div id="fragment-924238-pnvp-<?= $index ?>" class="company-card">
                                <div class="flip-card">
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                            <div class="image-1"><img src="<?= $item['image'] ?>">
                                            </div>
                                        </div>
                                        <div class="flip-card-back">
                                            <div class="hover-title"> <?= $item['title'] ?></div>
                                            <div class="hover-phone">
                                                <div><a href="tel:<?= $item['phone'] ?>"
                                                        target="">&nbsp;<?= $item['phone'] ?></a>&nbsp;&nbsp;
                                                </div>
                                            </div>
                                            <div class="hover-link"><a href="<?= $item['site_link'] ?>"
                                                                       target="_blank">
                                                    <?php if (substr($item['site_link'], 0, 8) != "https://"):
                                                        echo str_replace("http://", "", $item['site_link']);
                                                    else:
                                                        if (strpos($item['site_link'], "www.") == false):
                                                            echo strtok(str_replace("https://", "www.", $item['site_link']), '/');
                                                        else:
                                                            echo strtok(str_replace("https://", "", $item['site_link']), '/');
                                                        endif;
                                                    endif;
                                                    ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="bg- px-3 py-3" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-yzmw">
                        <div class="py-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>