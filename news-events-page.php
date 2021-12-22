<?php /* Template Name: News & Events */ ?>

<?php get_header(); ?>

<section class="section-1">
    <div id="fragment-924243-wnpc">
        <div class="sub-header py-6" style="background-image: url(<?= get_field('banner_image') ?>);">
            <div class="container">
                <div class="row">
                    <div class="col col-12">
                        <h1><?= the_title() ?></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg- px-3 py-3 section-2" style="">
    <div class="container">
        <div class="row ">
            <div class="col col-12">
                <div id="fragment-0-tqna">
                    <div class="py-3"></div>
                </div>
            </div>
        </div>
    </div>
</section>
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
                                        <?php $argsNeubau = ['numberposts' => -1] ?>
                                        <?php $neubauPosts = get_posts($argsNeubau); ?>
                                        <?php foreach ($neubauPosts as $post): ?>
                                            <?php $title_post = strip_tags($post->post_title);
                                            $content_post = strip_tags($post->post_content); ?>
                                            <div class="col-lg-4">
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
                                        <?php endforeach; ?>
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
<?php get_footer() ?>
