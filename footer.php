</main>
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
        <p><small>&COPY; Todos os direitos reservados &CenterDot; Cozumel Estética &CenterDot; <?= date("Y"); ?></small></p>
    </div>
    <!--end of copyright-->

    <!--developer-->
    <div class="footer__developer">
        <p><small>Desenvolvido por <strong><a href="https://goognet.com.br" target="_blank">Goognet Solução Digital</a></strong></small></p>
    </div>
    <!--end of developer-->
</footer>

<?php wp_footer(); ?>
</body>
</html>