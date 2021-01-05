<?php get_header(); ?>

<!--main-->

<!--product product-->
<section class="product">

    <div class="container">
        <!--header-->
        <header class="product__header">
            <h1>Conheça os nossos produtos</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="product__content">

            <?php
            $paged = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $arg_category = [
                'posts_per_page' => -1,
                'post_type' => 'produtos',
                'tax_query' => [
                    [
                        'taxonomy' => 'categorias',
                        'field' => 'slug',
                        'terms' => 'corporal'
                    ]
                ],
                'paged' => $paged,
            ];
            ?>
            <?php
            // the query
            $the_query = new WP_Query($arg_category);
            ?>

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'product'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem produtos cadastrados no momento.'); ?></p>
            <?php endif; ?>

        </div>
        <!--end of content-->
    </div>

</section>
<!--end of product product-->

<!--end of main-->

<?php get_footer(); ?>
