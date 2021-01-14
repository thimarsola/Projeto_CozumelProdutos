<?php

if(!is_home()){
    echo "</main>";
}

?>

<!--end of main-->
<footer class="footer">
    <hr>
    <!--logo-->
    <div class="footer__logo">
        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-footer.svg" alt="Logo Cozumel Rodapé" loading='lazy'/>
    </div>
    <!--end of logo-->

    <!--copyright-->
    <div class="footer__copyright">
        <p><small>Cozumel Estética &CenterDot; &COPY; COPYRIGHT <?= date("Y"); ?> &CenterDot; Todos os direitos reservados</small></p>
    </div>
    <!--end of copyright-->

    <!--developer-->
    <div class="footer__developer">
        <div class="container">
            <p><small>Desenvolvido por <strong><a href="https://goognet.com.br" target="_blank" title="Especializados em Marketing Digital">Goognet Solução Digital</a></strong></small></p>

            <?php
            $protocols = array('http://', 'http://www.', 'www.');

            if (is_home()) {
                $urlBase = str_replace($protocols, '', get_bloginfo('wpurl'));
            } else {
                $urlBase = str_replace($protocols, '', get_bloginfo('wpurl')) . '/' . (get_page_uri());
            }
            ?>

            <!--validator-->
            <div class="footer__developer__validator">
                <a href="https://validator.w3.org/nu/?showsource=yes&showoutline=yes&showimagereport=yes&doc=https%3A%2F%2F<?= $urlBase ?>%2F" target="_blank" title="Tecnologia W3C"><img src="<?php echo get_template_directory_uri(); ?>/_cdn/img/vt-html.svg" alt="Vetor W3C Validator">W3C Validator</a>
            </div>
            <!--end of validator;-->
        </div>
    </div>
    <!--end of developer-->
</footer>

<?php wp_footer(); ?>
</body>
</html>