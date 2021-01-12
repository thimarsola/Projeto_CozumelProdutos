<!--treatments-->
<article class="units__content__card">

    <!--image-->
    <div class="units__content__card__image">
        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-unidades.svg" alt="Unidade Cozumel"/>
    </div>
    <!--end of image-->

    <!--body-->
    <div class="units__content__card__body">

        <!--header-->
        <header class="units__content__card__body__header">
            <h2><?= get_the_title(); ?></h2>
        </header>
        <!--end of header-->

        <!--text-->
        <div class="units__content__card__body__text">
            <p><?php the_field('unit_address'); ?>, <?php the_field('unit_number') ?></p>

            <?php
            if (!empty(get_field('unit_complement'))):
                ?>

                <p><?php the_field('unit_complement'); ?></p>

            <?php endif; ?>

            <p><?php the_field('unit_neighborhood'); ?></p>

            <?php
            $zipCode = get_field('unit_zip_code');
            $zipCodeStart = substr($zipCode, 0, 5);
            $zipCodeEnd = substr($zipCode, 5, 8);
            echo "<p>CEP: " . $zipCodeStart . "-" . $zipCodeEnd . "</p>";

            $ddd = get_field('unit_ddd');

            if (strlen($ddd) == 3) {
                $dddFormat = substr($ddd, 1, 3);
            } else {
                $dddFormat = $ddd;
            }
            if (strlen(get_field('unit_phone')) == 9) {

                $ddd = get_field('unit_ddd');
                $phone = get_field('unit_phone');
                $phoneStart = substr($phone, 0, 5);
                $phoneEnd = substr($phone, 5, 9);

                echo "<p>Telefone: (" . $dddFormat . ") " . $phoneStart . "-" . $phoneEnd . "</p>";
            } else {

                $phone = get_field('unit_phone');
                $phoneStart = substr($phone, 0, 4);
                $phoneEnd = substr($phone, 4, 8);

                echo "<p>Telefone: (" . $dddFormat . ") " . $phoneStart . "-" . $phoneEnd . "</p>";
            }
            ?>
        </div>
        <!--end of text-->

        <a href="https://api.whatsapp.com/send?phone=55<?= $dddFormat; ?><?php the_field('unit_phone'); ?>&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20a%20cl%C3%ADnica" class="btn btn--theme-primary" target="blank">Mais informações</a>

    </div>
    <!--end of body-->
</article>
<!--end of treatments-->