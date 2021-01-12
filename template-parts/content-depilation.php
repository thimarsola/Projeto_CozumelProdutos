<!--treatments-->
<article class="depilation__content__services__card">

    <!--header-->
    <header class="depilation__content__services__card__header">
        <h2><?= get_the_title(); ?></h2>
    </header>
    <!--end of header-->

    <!--body-->
    <div class="depilation__content__services__card__body">

        <!--text-->
        <div class="depilation__content__services__card__body__text">
            <p><?php the_field('depilation_description'); ?></p>

            <?php
            if (!empty(get_field('depilation_recommendation'))):
                ?>

                <!--recommendation-->
                <div class="depilation__content__services__card__body__text__recommendation">
                    <p><?php the_field('depilation_recommendation'); ?></p>
                </div>
                <!--end of recommendation-->

            <?php endif; ?>

        </div>
        <!--end of text-->

    </div>
    <!--end of body-->


</article>
<!--end of treatments-->