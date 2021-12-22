<?php
/*
 * Template Name: Post Template
 * Template Post Type: post
 */

get_header(); ?>
<section class="blog">
    <div id="fragment-924247-liox" >
        <div class="blog-section">
            <div class="container blog-wrap">
                <div class="row">
                    <div class="col col-12">
                        <div class="portlet">
                            <div class="portlet-boundary portlet-boundary_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_ portlet-static portlet-static-end portlet-asset-publisher portlet-barebone"
                                 id="p_p_id_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_liox_">
                                <span id="p_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_liox"></span>
                                <section class="portlet"
                                         id="portlet_com_liferay_asset_publisher_web_portlet_AssetPublisherPortlet_INSTANCE_liox">
                                    <div class="portlet-content">
                                        <div class=" portlet-content-container">
                                            <div class="portlet-body">
                                                <div class="asset-full-content clearfix mb-5 default-asset-publisher show-asset-title ">
                                                    <span class="asset-anchor lfr-asset-anchor" id="1792249"></span>
                                                    <div class="asset-content mb-3">
                                                        <div class="journal-content-article "
                                                             data-analytics-asset-id="1792238"
                                                             data-analytics-asset-title="Coronavirus - So schützen wir uns"
                                                             data-analytics-asset-type="web-content">
                                                            <div class="widget-mode-detail">
                                                                <div class="container widget-mode-detail-header" style="background-image: url(<?= get_field('banner_image') ?>);">
                                                                    <div class="row">
                                                                        <div class="col-md-8 mx-auto">
                                                                            <div class="autofit-row">
                                                                                <div class="autofit-col autofit-col-expand">
                                                                                    <h3 class="title"><?= the_title() ?></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 aspect-ratio aspect-ratio-bg-cover cover-image mb-3"
                                                                     style="padding: 0 !important;">
                                                                        <img data-fileentryid="1911337" class="w-100"
                                                                             id="carousel-selected-image" src="<?=  get_field('post_image') ?>">
                                                                </div>
                                                                <div class="container widget-mode-detail-header">
                                                                    <div class="row">
                                                                        <div class="col-md-8 mx-auto widget-mode-detail-text">
                                                                            <?= the_content(); ?>
                                                                        </div>
                                                                        <div class="col-md-8 mx-auto widget-mode-detail-text">
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php get_footer(); ?>
