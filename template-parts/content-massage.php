<!--treatments-->
<article class="massage__content__card">

    <!--header-->
    <header class="massage__content__card__header">
        <h2><?= get_the_title(); ?></h2>
    </header>
    <!--end of header-->

    <!--body-->
    <div class="massage__content__card__body">

        <!--text-->
        <div class="massage__content__card__text">
            <p><?php the_field('massage_description'); ?></p>
            
            <?php
            if (!empty(get_field('massage_recommendation'))):
                ?>

                <!--recommendation-->
                <div class="massage__content__card__text__recommendation">
                    <p><?php the_field('massage_recommendation'); ?></p>
                </div>
                <!--end of recommendation-->

            <?php endif; ?>
                
        </div>
        <!--end of text-->

        <!--image-->
        <div class="massage__content__card__body__image">
            <?php if (get_field('massage_image')) : ?>
                <img src="<?php the_field('massage_image'); ?>" alt="Tratamento Cozumel - <?php the_title(); ?>" loading='lazy'/>
            <?php endif; ?>
        </div>
        <!--end of image-->

    </div>
    <!--end of body-->


</article>
<!--end of treatments-->