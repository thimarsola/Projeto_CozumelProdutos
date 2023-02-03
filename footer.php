<?php

if (!is_home()) {
    echo "</main>";
}

?>

<!--end of main-->
<footer class="footer">
    <hr>
    <!--logo-->
    <div class="footer__logo">
        <img src="<?= get_template_directory_uri(); ?>/_cdn/img/logo-footer.svg" alt="Logo Cozumel Rodapé" loading='lazy' />
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
        </div>
    </div>
    <!--end of developer-->
</footer>

<?php wp_footer(); ?>
</body>

</html>