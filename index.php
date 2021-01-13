<?php get_header(); ?>

<!--main-->
<section class="hero">
    <div class="container">

        <!--header-->
        <header class="hero__header">
            <h1><small>Viva a beleza de</small> <br>Sentir-se bem <br><span>Consigo mesmo!</span></h1>
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
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-about.jpg" alt="Conheça a Clínica Cozumel Estética e Bem-estar" loading='lazy'/>
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

        <!--content-->
        <div class="beautificationGaze__content">

            <!--services-->
            <div class="beautificationGaze__content__services">
                <?php
                $pagedBeautificationGaze = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

                $argBeautificationGaze = [
                    'posts_per_page' => -1,
                    'post_type' => 'embelezamento_olhar',
                    'paged' => $pagedBeautificationGaze,
                    'order' => "ASC"
                ];
                ?>
                <?php
                // the query
                $theQueryBeautificationGaze = new WP_Query($argBeautificationGaze);
                ?>

                <?php if ($theQueryBeautificationGaze->have_posts()) : ?>
                    <?php while ($theQueryBeautificationGaze->have_posts()) : $theQueryBeautificationGaze->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'beautification-gaze'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
                <?php endif; ?>
            </div>
            <!--end of services-->

            <!--image-->
            <div class="beautificationGaze__content__image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-embelezamento-do-olhar.png" alt="Embelezamento do Olhar Cozumel"/>
            </div>
            <!--end of image-->

        </div>
        <!--end of content-->

    </div>

</section>
<!--end of beautification Gaze-->

<!--depilation-->
<section id="depilacao" class="depilation">
    <div class="container">

        <!--header-->
        <header class="depilation__header">
            <h1>Depilação</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="depilation__content">

            <!--image-->
            <div class="depilation__content__image">
                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/img-depilacao.png" alt="Depilação Cozumel"/>
            </div>
            <!--end of image-->

            <!--services-->
            <div class="depilation__content__services">
                <?php
                $pagedDepilation = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

                $argDepilation = [
                    'posts_per_page' => -1,
                    'post_type' => 'depilacao',
                    'paged' => $pagedDepilation,
                    'order' => "ASC"
                ];
                ?>
                <?php
                // the query
                $theQueryDepilation = new WP_Query($argDepilation);
                ?>

                <?php if ($theQueryDepilation->have_posts()) : ?>
                    <?php while ($theQueryDepilation->have_posts()) : $theQueryDepilation->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'depilation'); ?>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>

                <?php else : ?>
                    <p><?php _e('Não existem tratamentos cadastrados no momento.'); ?></p>
                <?php endif; ?>
            </div>
            <!--end of services-->
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of depilation-->

<!--units-->
<section id="unidades" class="units">
    <div class="container">

        <!--header-->
        <header class="units__header">
            <h1>Nossas Unidades</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="units__content">
            <?php
            $pagedUnit = ( get_query_var('paged') ) ? absint(get_query_var('paged')) : 1;

            $argUnit = [
                'posts_per_page' => -1,
                'post_type' => 'unidades',
                'paged' => $pagedUnit,
                'order' => "ASC"
            ];
            ?>
            <?php
            // the query
            $theQueryUnit = new WP_Query($argUnit);
            ?>

            <?php if ($theQueryUnit->have_posts()) : ?>
                <?php while ($theQueryUnit->have_posts()) : $theQueryUnit->the_post(); ?>
                    <?php get_template_part('template-parts/content', 'unit'); ?>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Não existem unidades cadastradas no momento.'); ?></p>
            <?php endif; ?>
        </div>
        <!--end of content-->

    </div>
</section>
<!--end of units-->

<!--company-->
<section class="company">

    <div class="container">

        <div class="company__content">

            <!--container-->
            <div class="company__content__container">

                <!--header-->
                <header class="company__content__container__header">
                    <h1>Melhore a qualidade de vida de seus colaboradores!</h1>
                </header>
                <!--end of header-->

                <!--text-->
                <div class="company__content__container__text">
                    <p>O trabalho é uma das atividades que mais ocupam o tempo de um ser humano e é grande o número de pessoas que passam horas em pé, sentadas numa mesma posição ou realizando repetidamente uma mesma atividade. Com isso, os problemas de saúde de origem física e psíquica são cada vez mais frequentes e atingem as mais diversas profissões. Com o objetivo de evitar problemas e despertar a consciência da necessidade da qualidade de vida no ambiente profissional, as ações para manutenção da saúde laboral têm se intensificado. </p>
                    <p>A Cozumel nas empresas, tem o propósito de promover o bem-estar e melhorar a qualidade de vida dos colaboradores, de forma rápida, e sem ter que deslocar as pessoas de seu local de trabalho.</p>
                </div>
                <!--end of text-->

            </div>
            <!--end of container-->

        </div>

    </div>

</section>
<!--end of company-->

<!--contact-->
<section id="contato" class="contact">
    <div class="container">

        <!--header-->
        <header class="contact__header">
            <h1>Contato</h1>
        </header>
        <!--end of header-->

        <!--content-->
        <div class="contact__content">

            <!--form-->
            <div class="contact__content__form">
                <p>Entre em contato para sanar suas dúvidas, enviar sugestões e solicitar atendimento. Teremos o maior prazer em lhe responder o mais breve possível.</p>

                <form id="form" action="<?= get_template_directory_uri(); ?>/_cdn/php/sender.php" method="POST" enctype="multipart/form-data">
                    <input name="name" type="text" placeholder="Nome Completo*" required>
                    <input name="mail" type="email" placeholder="E-mail*" required>
                    <input name="phone" type="text" placeholder="DDD + Telefone">
                    <input name="mobilePhone" type="text" placeholder="DDD + Celular*" required>
                    <input name="subject" type="text" placeholder="Assunto*" required>
                    <textarea name="message" rows="5" cols="10" placeholder="Mensagem*" required></textarea>

                    <!--validation-->
                    <div class="contact__content__form__validation">
                        <div class="g-recaptcha"  data-sitekey="6LfuUK0UAAAAAPyxhYz6GnGuEzfTKgcVVt-fb12I"></div>
                    </div>
                    <!--end of validation-->

                    <!--submit-->
                    <div class="contact__content__form__submit">
                        <button type="submit" name="submit" value="submit" class="btn btn--theme-primary">Enviar</button>
                    </div>
                    <!--end of submit-->

                </form>
            </div>
            <!--end of form-->

            <!--information-->
            <div class="contact__content__information">

                <!--address-->
                <div class="contact__content__information__address">

                    <!--header-->
                    <header class="contact__content__information__address__header">
                        <h2>Endereço</h2>
                    </header>
                    <!--end of header-->

                    <!--content-->
                    <div class="contact__content__information__address__content">                        
                        <address>
                            <a href="https://goo.gl/maps/ZvBvXoSK7xbF5A3q7" target="blank">Rua Frei Caneca, 558 - CJ 1106 - Consolação - São Paulo</a>
                        </address>
                    </div>
                    <!--end of content-->
                </div>
                <!--end of address-->

                <!--map-->
                <div class="contact__content__information__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14629.694907472349!2d-46.6529962!3d-23.5532206!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x985162576f6bbe88!2sCozumel!5e0!3m2!1spt-BR!2sbr!4v1560715569972!5m2!1spt-BR!2sbr" allowfullscreen></iframe>
                </div>
                <!--end of map-->

                <!--expedient-->
                <div class="contact__content__information__expedient">

                    <!--header-->
                    <header class="contact__content__information__expedient__header">
                        <h2>Horário de funcionamento</h2>
                    </header>
                    <!--end of header-->

                    <!--content-->
                    <div class="contact__content__information__expedient__content">
                        <p>Segunda à Sexta</p>
                        <p>8:00 ás 21:00</p>
                        <p>Sábados</p>
                        <p>9:00 ás 13:00</p>
                    </div>
                    <!--end of content-->
                </div>
                <!--end of expedient-->

                <!--phones-->
                <div class="contact__content__information__phones">

                    <!--header-->
                    <header class="contact__content__information__phones__header">
                        <h2>Telefones</h2>
                    </header>
                    <!--end of header-->

                    <!--content-->
                    <div class="contact__content__information__phones__content">
                        <address>
                            <a href="tel:1123082073" target="blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-phone.svg" alt="Telefone Cozumel Estética"/>(11) 2308-2073
                            </a>
                        </address>

                        <address>
                            <a href="https://api.whatsapp.com/send?l=pt_BR&phone=5511985523413" target="blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-whatsapp.svg" alt="Whatsapp Cozumel Estética"/>(11) 98552-3413
                            </a>
                        </address>
                    </div>
                    <!--end of content-->

                </div>
                <!--end of phones-->

                <!--mail-->
                <div class="contact__content__information__mail">

                    <!--header-->
                    <header class="contact__content__information__mail__header">
                        <h2>E-mail</h2>
                    </header>
                    <!--end of header-->

                    <!--content-->
                    <div class="contact__content__information__mail__content">

                        <address>
                            <a href="mailto:atendimento@cozumelestetica.com.br" target="blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-mail.svg" alt="E-mail Cozumel Estética"/>atendimento@cozumelestetica.com.br
                            </a>
                        </address>

                    </div>
                    <!--end of content-->

                </div>
                <!--end of mail-->

                <!--social media-->
                <div class="contact__content__information__socialMedia">

                    <!--header-->
                    <header class="contact__content__information__socialMedia__header">
                        <h2>Mídias Sociais</h2>
                    </header>
                    <!--end of header-->

                    <!--content-->
                    <div class="contact__content__information__socialMedia__content">
                        <address>
                            <a href="tel:1123082073" target="blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-instagram.svg" alt="Instagram Cozumel Estética"/>@cozumel.estetica
                            </a>
                        </address>

                        <address>
                            <a href="tel:1123082073" target="blank">
                                <img src="<?= get_template_directory_uri(); ?>/_cdn/img/vt-facebook.svg" alt="Facebook Cozumel Estética"/>Cozumel-Estética
                            </a>
                        </address>
                    </div>
                    <!--end of content-->

                </div>
                <!--end of social media-->

            </div>
            <!--end of information-->

        </div>
        <!--end of content-->

    </div>
</section>
<!--end of contact-->

<?php get_footer(); ?>
