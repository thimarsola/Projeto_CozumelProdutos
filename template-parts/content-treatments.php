<!--treatments-->
<article class="treatments__content__card">

    <!--image-->
    <div class="treatments__content__card__image">
        <?php if (get_field('body_treatments_image')) : ?>
            <img src="<?php the_field('body_treatments_image'); ?>" alt="Tratamento Cozumel - <?php the_title(); ?>" loading='lazy'/>
        <?php endif; ?>
    </div>
    <!--end of image-->

    <!--body-->
    <div class="treatments__content__card__body">

        <!--header-->
        <header class="treatments__content__card__body__header">
            <h2><?= get_the_title(); ?></h2>
        </header>
        <!--end of header-->

        <!--text-->
        <div class="treatments__content__card__body__text">
            <p><?php the_field('body_treatments_description'); ?></p>
        </div>
        <!--end of text-->

        <?php
            if(!empty(get_field('body_treatments_recommendation'))):
        ?>
        
        <!--recommendation-->
        <div class="treatments__content__card__body__recommendation">
            <p><?php the_field('body_treatments_recommendation'); ?></p>
        </div>
        <!--end of recommendation-->
        
        <?php endif; ?>

    </div>
    <!--end of body-->

</article>
<!--end of treatments-->