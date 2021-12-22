<?php /* Template Name: Öffnungszeiten */ ?>

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
<?php if (get_field('regular_time', 'options')): ?>
    <section class="bg- px-3 py-3 section-3" style="">
        <div class="container">
            <div class="row justify-content-around">
                <?php foreach (get_field('business_spaces_regular_time', 'options') as $index => $item): ?>
                    <div class="col col-md-4 col-12">
                        <div id="fragment-0-fg<?= $index ?>">
                            <div class="component-heading-2 pb-2">
                                <h2>
                                    <div>
                                        <div style="text-align:center; font-size: 1.375rem;"> <?= $item['name'] ?></div>
                                    </div>
                                </h2>
                            </div>
                        </div>
                        <div id="fragment-0-iaoy">
                            <div class="component-parapgraph pb-4">
                                <div>
                                    <div style="text-align:center"><?= $item['regular_day'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="bg- px-3 py-3 section-5" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-egoz">
                        <div class="py-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php if (!empty(get_field('pdf', 'options'))): ?>
        <section class="bg- px-3 py-3 section-6" style="">
            <div class="container">
                <div class="row ">
                    <div class="col col-12">
                        <div id="fragment-0-lnau">
                            <div class="component-link-primary pb-4">
                                <div class="text-center"><a href="<?= get_field('pdf', 'options') ?>"
                                        class="btn btn-primary" target="_blank">Sonderöffnungszeiten</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>
    <section class="bg- px-3 py-3 section-7" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-dkdv">
                        <div class="portlet-boundary portlet-boundary_es_asvito_liferay_openingtimes_OpeningTimesViewPortlet_ portlet-static portlet-static-end portlet-barebone"
                             id="p_p_id_es_asvito_liferay_openingtimes_OpeningTimesViewPortlet_INSTANCE_Gix4N8Fb46BS_">
                            <span id="p_es_asvito_liferay_openingtimes_OpeningTimesViewPortlet_INSTANCE_Gix4N8Fb46BS"></span>
                            <section class="portlet"
                                     id="portlet_es_asvito_liferay_openingtimes_OpeningTimesViewPortlet_INSTANCE_Gix4N8Fb46BS">
                                <div class="portlet-content">
                                    <div class=" portlet-content-container">
                                        <div class="portlet-body">
                                            <div class="content-wrap py-6 px-3">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col col-12 center cs-table1"><h3 class="heading"><b>Spezielle
                                                                    Öffnungszeiten</b></h3></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col col-12 center">
                                                            <table>
                                                                <tbody>
                                                                <?php foreach (get_field('special_time','options') as $index =>$date):
                                                                    if($index < 6):
                                                                    ?>
                                                                    <tr>
                                                                        <td><h4> <?= date_i18n('l, j. F Y', strtotime($date["date"]))  ?></h4></td>
                                                                        <td> <?= $date["description"] ?></td>
                                                                        <td> <?php if($date["closed"][0] == "Geschlossen"){
                                                                                echo "Geschlossen";
                                                                            }else{
                                                                                echo  $date["opening_time"]. " - ".$date["closing_time"] ;
                                                                            } ?></td>
                                                                    </tr>
                                                                    <?php endif; ?>
                                                                <?php endforeach; ?>
                                                                </tbody>
                                                            </table>
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
    </section>
    <section class="bg- px-3 py-3 section-8" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-oght">
                        <div class="py-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer() ?>