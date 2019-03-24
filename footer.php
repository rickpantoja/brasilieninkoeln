<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BrasilienInKoln
 */

?>

	</div><!-- #content -->

	<footer>
		
		<div class="footer-content wrapper">
            <ul class="main-menu-footer">
                <li><a href="">Seja bem-vindo</a></li>
                <li><a href="">Notícias</a></li>
                <li><a href="">Eventos</a></li>
                <li><a href="">Projetos</a></li>
                <li><a href="">Equipe</a></li>
            </ul>
            <ul class="links-menu-footer">
                <li><a href="">Consulado Brasileiro</a></li>
                <li><a href="">Empreender no Exterior</a></li>
                <li><a href="">Cidade de Colônia</a></li>
                <li><a href="">Köln in Rio e.V.</a></li>
                <li><a href="">Missão Portuguesa</a></li>
            </ul>
            <ul class="contact">
                <li>aurelio.santos@gmail.com<br>(176) 873 87127</li>
                <li>Hamburgstrasse, 67<br>55978 Köln</li>
                <div class="sm-menu">
                    <ul>
                        <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/face.png" alt=""></a></li>
                        <li><a href="#"><img src="<?php echo(get_template_directory_uri()); ?>/images/insta.png" alt=""></a></li>
                    </ul>
                </div>
            </ul>
            <img class="footer-logo" src="<?php echo(get_template_directory_uri()); ?>/images/logo_vert.png" alt="">
        </div>

        <div class="footer-footer">
            <p>Copyright © 2019 - BrasilienInRio e.V.</p>
            <span class="vbar">|</span>
            <p>Proteção de Dados</p>
            <span class="vbar">|</span>
            <p>Developed by Ricardo Pantoja</p>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
