<?php
$phone = '';
?>

<!--product-->
<article class="product__content__card">

    <!--image-->
    <div class="product__content__card__image">
        <?php if (get_field('product_image')) : ?>
            <img src="<?php the_field('product_image'); ?>" alt="Foto ilustrativa <?php the_title(); ?>" loading='lazy'/>
        <?php endif; ?>
    </div>
    <!--end of image-->

    <!--body-->
    <div class="product__content__card__body">

        <!--header-->
        <div class="product__content__card__body__header">        
            <h2><?php the_title(); ?></h2>
        </div>
        <!--end of header-->
        <?php
        $type = get_the_terms($post, 'categorias');
        $typeName = join(' &CenterDot; ', wp_list_pluck($type, 'name'));
        ?>
        <p><small><?= $typeName; ?></small></p>
        <p><span><?= "R$" . number_format(get_field('sale_price'), 2, ',', '.') ?></span></p>
        <a href="https://api.whatsapp.com/send?phone=5511<?= $phone; ?>&text=Ol%C3%A1%20Cozumel%20Est%C3%A9tica%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20o%20produto%3A%20*<?php rawurldecode(the_title()); ?>*" class="btn btn--theme-primary" target='_blank'>Mais informações</a>
    </div>
    <!--end of body-->

</article>
<!--end of product-->