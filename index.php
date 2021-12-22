<?php get_header() ?>
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
    <!-- start INFO  -->
    <section class="bg- px-3 py-3 section-3" style="">
        <div class="container">
            <div class="row ">
                <div class="col col-12">
                    <div id="fragment-0-nzyn">
                        <div class="component-parapgraph pb-4">
                            <div>
                                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                    <?php the_content(); ?>
                                <?php endwhile; endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer() ?>