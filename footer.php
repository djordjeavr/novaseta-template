<?php
?>

<div id="kontakt" class="contact-form">
    <div class="container-fluid">
        <div class="row w-100">
            <div class="col col-6 ">
                <div class="form-heading"><h3>Kontaktieren Sie uns</h3>
                    <p class="sub-header">Gerne geben wir Ihnen auch Auskunft über freie
                        Mietflächen. Kontaktieren Sie uns dazu einfach.</p>
                    <p>Erforderliche Felder *</p></div>
                <div class="portlet">
                    <div class="portlet-boundary portlet-boundary_com_liferay_dynamic_data_mapping_form_web_portlet_DDMFormPortlet_ portlet-static portlet-static-end portlet-forms-display portlet-barebone"
                         id="p_p_id_com_liferay_dynamic_data_mapping_form_web_portlet_DDMFormPortlet_INSTANCE_lzfr_">
                        <span id="p_com_liferay_dynamic_data_mapping_form_web_portlet_DDMFormPortlet_INSTANCE_lzfr"></span>
                        <section class="portlet"
                                 id="portlet_com_liferay_dynamic_data_mapping_form_web_portlet_DDMFormPortlet_INSTANCE_lzfr">
                            <div class="portlet-content">
                                <div class=" portlet-content-container">
                                    <div class="portlet-body">
                                        <div class="portlet-forms">
                                            <?php the_field('contact_form','options'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col col-6">
                <div class="map-wrap">
                    <iframe src="<?= get_field('map','options') ?>"
                            width="100%" height="100%" frameborder="0" style="border:0;"
                            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div id="fragment-924241-tmxx">
        <div class="contact-info py-4">
            <div class="container">
                <div class="row">
                    <?php  foreach ( get_field('footer_info','options') as $item):  ?>
                    <div class="col col-4">
                        <div class="icon-wrap"><img src="<?= $item['image'] ?>" alt=""></div>
                        <div class="icon-content">
                            <div class="icon-heading"><?= $item['title'] ?></div>
                            <div class="icon-text"><?= $item['text'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div id="fragment-924236-zbus">
        <div class="footer">
            <div class="col footer-logo"><a href="<?php echo get_home_url(); ?>"><img src="<?= get_field('footer_logo','options') ?>" alt=""></a>
            </div>
            <div class="col copyright"> © 2020 Novaseta. All rights reserved. <span><a
                            href="">Rechtliche Informationen</a> | <a href="impressum.html">Impressum</a> | <a
                            href="">Datenschutz</a></span></div>
        </div>
    </div>
</section>
<?php wp_footer();?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js" defer></script>
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js" defer></script>

<script src="<?php bloginfo('template_directory'); ?>/js/script.js?v=1" defer></script>


</body>

</html>
