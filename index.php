<?php get_header(); ?>

<!--main-->
<section class="hero">
    <div class="container">

        <!--header-->
        <header class="hero__header">
            <h1>Viva a beleza de <br>Sentir-se bem <br><span>Consigo mesmo</span></h1>
        </header>
        <!--end of header-->

    </div>
</section>
<!--end of main-->

<!--clinic-->
<section id="a-clinica" class="clinic">

    <div class="container">

        <!--header-->
        <header class="clinic__header">
            <h1>Á Clínica</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="clinic__content">

            <!--text-->
            <div class="clinic__content__text">
                <p>A <strong>Cozumel Estética</strong>, é uma clínica de beleza com o objetivo de promover o bem-estar aos clientes em um ambiente aconchegante. Com mais de 6 anos no mercado conta com mais de 40 tratamentos estéticos entre massagens e protocolos exclusivos da marca desenvolvida pela equipe técnica de treinamento, contamos com depilação a laser e área médica.</p>
                <p>Prezamos um atendimento de qualidade com profissionais qualificados em um ambiente climatizado, com salas individualizadas.</p>
            </div>
            <!--end of text-->

            <!--image-->
            <div class="clinic__content__image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-clinica.jpg" alt="Conheça a Clínica Cozumel Estética e Bem-estar" loading='lazy'/>
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>

</section>
<!--end of clinic-->

<!--nail polish-->
<section id="esmalteria" class="nailPolish">
    <div class="container">

        <!--header-->
        <header class="nailPolish__header">
            <h1>Esmalteria</h1>
        </header>
        <!--enf of header-->

        <!--content-->
        <div class="nailPolish__content">

            <!--text-->
            <div class="nailPolish__content__text">
                <p>Com um espaço todo climatizado para um maior conforto e todo o cuidado com as suas mãos e seus pés, contamos com mais de 500 opções de esmaltes nacionais e importados, além de um SPA para mãos e pés.</p>
                <p>Para garantir a melhor qualidade e toda a segurança dos nossos serviços, trabalhamos somente com materiais descartáveis e esterilizados.</p>
            </div>
            <!--end of text-->

            <!--image-->
            <div class="nailPolish__content__image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-esmalteria.jpg" alt="Conheça a Esmalteria Cozumel Estética e Bem-estar"/>
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of nail polish-->

<!--body treatments-->
<section id="tratamentos-corporais" class="bodyTreatments">
    <div class="container">

        <!--header-->
        <header class="bodyTreatments__header">
            <h1>Tratamentos Corporais</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="bodyTreatments__content">
            <?php
            $pagedBodyTreatments = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $argBodyTreatments = [
                'posts_per_page' => -1,
                'post_type' => 'tratamento_corporal',
                'paged' => $pagedBodyTreatments,
                'order' => "ASC"
            ];
            ?>
            <?php
            // the query
            $theQueryBodyTreatments = new WP_Query($argBodyTreatments);
            ?>

            <?php if ($theQueryBodyTreatments->have_posts()) : ?>
                <?php while ($theQueryBodyTreatments->have_posts()) : $theQueryBodyTreatments->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'treatments'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
            <?php endif; ?>
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of body treatments-->

<!--mecial area-->
<section id="area-medica" class="medicalArea">

    <div class="container">

        <!--header-->
        <header class="medicalArea__header">
            <h1>Área Médica</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="medicalArea__content">

            <!--text-->
            <div class="medicalArea__content__text">
                <p>Com o intuito de promover ainda mais a beleza e resgatar a autoestima dos nossos pacientes, a Cozumel Estética também trabalha com procedimentos invasivos.</p>
                <p>Todos os procedimentos são realizados por Biomédicos Estetas e Médicos especializados na área da estética.</p>
                <p>Nossos procedimentos buscam sempre a melhora da harmonização facial e corporal.</p>
                <p>Os nossos tratamentos invasivos são:</p>

                <ul>
                    <li>Microagulhamento</li>
                    <li>Toxina Botulina | <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-toxina-botulina.png" alt="Tratamento Toxina Botulina Cozumel"/></li>
                    <li>Intradermoterapia Corporal, Facial e Capilar</li>
                    <li>Peelings Químicos</li>
                    <li>Fios de Sustentação</li>
                    <li>Rinomodelagem</li>
                </ul>

                <p>Nossos tratamentos são indicados para pacientes que procuram procedimentos de emagrecimento, clareação de manchas, calvície, flacidez corporal e facial e rejuvenescimento.</p>
            </div>
            <!--end of text-->

            <!--image-->
            <div class="medicalArea__content__image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-area-medica.png" alt="Procedimentos Invasivos Cozumel"/>
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>

</section>
<!--end of medical area-->

<!--facial treatments-->
<section id="tratamentos-faciais" class="facialTreatments">
    <div class="container">

        <!--header-->
        <header class="facialTreatments__header">
            <h1>Tratamentos Faciais</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="facialTreatments__content">
            <?php
            $pagedFacialTreatments = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $argFacialTreatments = [
                'posts_per_page' => -1,
                'post_type' => 'tratamento_facial',
                'paged' => $pagedFacialTreatments,
                'order' => "ASC"
            ];
            ?>
            <?php
            // the query
            $theQueryFacialTreatments = new WP_Query($argFacialTreatments);
            ?>

            <?php if ($theQueryFacialTreatments->have_posts()) : ?>
                <?php while ($theQueryFacialTreatments->have_posts()) : $theQueryFacialTreatments->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'treatments'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
            <?php endif; ?>
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of facial treatments-->

<!--body massage-->
<section id="massagem-corporal" class="bodyMassage">

    <div class="container">

        <!--header-->
        <header class="bodyMassage__header">
            <h1>Massagem Corporal</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="bodyMassage__content">
            <?php
            $pagedBodyMassage = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $argBodyMassage = [
                'posts_per_page' => -1,
                'post_type' => 'massagem_corporal',
                'paged' => $pagedBodyMassage,
                'order' => "ASC"
            ];
            ?>
            <?php
            // the query
            $theQueryBodyMassage = new WP_Query($argBodyMassage);
            ?>

            <?php if ($theQueryBodyMassage->have_posts()) : ?>
                <?php while ($theQueryBodyMassage->have_posts()) : $theQueryBodyMassage->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'massage'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
            <?php endif; ?>
        </div>
        <!--end of content-->

    </div>

</section>
<!--end of body massage-->

<!--body massage-->
<section id="massagem-facial" class="facialMassage">

    <div class="container">

        <!--header-->
        <header class="facialMassage__header">
            <h1>Massagem Facial</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="facialMassage__content">
            <?php
            $pagedFacialMassage = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $argFacialMassage = [
                'posts_per_page' => -1,
                'post_type' => 'massagem_facial',
                'paged' => $pagedFacialMassage,
                'order' => "ASC"
            ];
            ?>
            <?php
            // the query
            $theQueryFacialMassage = new WP_Query($argFacialMassage);
            ?>

            <?php if ($theQueryFacialMassage->have_posts()) : ?>
                <?php while ($theQueryFacialMassage->have_posts()) : $theQueryFacialMassage->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'massage'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
            <?php endif; ?>
        </div>
        <!--end of content-->

    </div>

</section>
<!--end of facial massage-->

<!--beautification Gaze-->
<section id="embelezamento-do-olhar" class="beautificationGaze">
    
    <div class="container">
        
        <!--header-->
        <header class="beautificationGaze__header">
            <h1>Embelezamento do Olhar</h1>
        </header>
        <!--end of header-->
        
    </div>
    
</section>
<!--end of beautification Gaze-->

<?php get_footer(); ?>
