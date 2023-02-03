<!--treatments-->
<article class="beautificationGaze__content__services__card">

    <!--header-->
    <header class="beautificationGaze__content__services__card__header">
        <h2><?= get_the_title(); ?></h2>
    </header>
    <!--end of header-->

    <!--body-->
    <div class="beautificationGaze__content__services__card__body">

        <!--text-->
        <div class="beautificationGaze__content__services__card__body__text">
            <p><?php the_field('beautification_gaze_description'); ?></p>
            
            <?php
            if (!empty(get_field('beautification_gaze_recommendation'))):
                ?>

                <!--recommendation-->
                <div class="beautificationGaze__content__services__card__body__text__recommendation">
                    <p><?php the_field('beautification_gaze_recommendation'); ?></p>
                </div>
                <!--end of recommendation-->

            <?php endif; ?>

            <?php
            if (!empty(get_field('beautification_gaze_durability'))):
                ?>

                <!--durability-->
                <div class="beautificationGaze__content__services__card__body__text__recommendation">
                    <p><?php the_field('beautification_gaze_durability'); ?></p>
                </div>
                <!--end of durability-->

            <?php endif; ?>
                
        </div>
        <!--end of text-->

    </div>
    <!--end of body-->


</article>
<!--end of treatments-->