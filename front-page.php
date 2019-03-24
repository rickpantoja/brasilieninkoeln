<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BrasilienInKoln
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="news wrapper"> <!-- News section -->

                <ul>
                    <li>
                        <h2 class="section-title">Notícias</h2>
                    </li>

                    <?php
                        $newsquery = new WP_Query('category_name=news&posts_per_page=3');
                        while ( $newsquery->have_posts() ) : $newsquery->the_post(); ?>
                        
                        <li>
                            <?php the_post_thumbnail(); ?>
                            <h3><?php the_title(); ?></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 40, '... <a href="'.get_the_permalink().'">Leia mais</a>'); ?></p>
                        </li>
                                    
                    <?php endwhile; ?>
                   
                </ul>

            </section>

            <section class="agenda"> <!-- Agenda section -->

                <div class="agenda-content wrapper">

                    <h2 class="section-title">Agenda</h2>

                    <ul class="calendar">
                        <li class="event">
                            <ul class="event-date">
                                <li><p>2019</p></li>
                                <li><h2>16</h2></li>
                                <li><p>Março</p></li>
                            </ul>
                            <ul class="event-namelocal">
                                <li><h3>Consulado Itinerante</h3></li>
                                <li><p>City Center</p></li>
                            </ul>
                        </li>
                        <li class="event">
                            <ul class="event-date">
                                <li><p>2019</p></li>
                                <li><h2>25</h2></li>
                                <li><p>Maio</p></li>
                            </ul>
                            <ul class="event-namelocal">
                                <li><h3>Feira de Artesanato</h3></li>
                                <li><p>Köln University</p></li>
                            </ul>
                        </li>
                        <li class="event">
                            <ul class="event-date">
                                <li><p>2019</p></li>
                                <li><h2>08</h2></li>
                                <li><p>Dezembro</p></li>
                            </ul>
                            <ul class="event-namelocal">
                                <li><h3>Festival de Música Brasileira</h3></li>
                                <li><p>Music Hall</p></li>
                            </ul>
                        </li>
                        <li class="event">
                            <ul class="event-date">
                                <li><p>2020</p></li>
                                <li><h2>16</h2></li>
                                <li><p>Fevereiro</p></li>
                            </ul>
                            <ul class="event-namelocal">
                                <li><h3>Simpósio de Cultura Brasileira</h3></li>
                                <li><p>Teatro de Colônia</p></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </section>

            <section class="projects"> <!-- Projects section -->

                <ul>
                    <li class="title">
                        <h2 class="section-title">Projetos</h2>
                    </li>
                    <?php
                        $projectquery = new WP_Query('category_name=projects&posts_per_page=3');
                        while ( $projectquery->have_posts() ) : $projectquery->the_post(); ?>
                        
                        <li>
                            <?php the_post_thumbnail(); ?>
                            <div class="item-text">
                                <h4>Projeto</h4>
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo wp_trim_words( get_the_content(), 40, '... <a href="'.get_the_permalink().'">Leia mais</a>'); ?></p>
                            </div>
                        </li>
                                    
                    <?php endwhile; ?>                
                </ul>

            </section>

            <section class="team"> <!-- Team section -->

                <div class="team-content wrapper">
                    <div class="team-text">
                        <h2 class="section-title">Equipe</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit et tellus auctor rutrum non faucibus leo. Proin ac dapibus lectus. Curabitur id lorem at nibh viverra tincidunt sed nec eros. Nunc nec nisl imperdiet, laoreet justo eleifend, ornare augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut velit et tellus auctor rutrum non faucibus leo. Proin ac dapibus lectus. Curabitur id lorem at nibh viverra tincidunt sed nec eros. Nunc nec nisl imperdiet, laoreet justo eleifend.</p>
                    </div>
                    <ul class="team-list">
                        <?php
                            $teamquery = new WP_Query('category_name=team&posts_per_page=3');
                            while ( $teamquery->have_posts() ) : $teamquery->the_post(); ?>
                            
                            <li class="team-member">
                                <?php the_post_thumbnail(); ?>
                                <ul class="team-desc">
                                    <li><p><strong><?php the_title(); ?></strong></p></li>
                                    <li><?php echo wp_trim_words( get_the_content(), 15, '... <a href="'.get_the_permalink().'">Leia mais</a>'); ?></li>
                                </ul>
                            </li>
                                        
                        <?php endwhile; ?>
                    </ul>
                </div>

            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
