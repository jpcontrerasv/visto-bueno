<?php get_header(); ?>
    <header class="box fwidth">
    	<div class="container-fluid">
        	<div class="col-lg-12 text-center">
		    	<img src="<?php bloginfo('template_url'); ?>/img/logo-wannabi.gif">
        	</div>
        </div>
    </header>

    <div class="container-fluid">
    
		<?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>            
    	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 text-center img-post">
        	<section class="container-fluid titulo">
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-left">
                	<p>Nombre de la entrega</p>
                </div>
            	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-left">
                	<p><strong><?php the_title(); ?></strong></p>
                </div>
            	<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 text-left">
                	<p>Fecha de la entrega</p>
                </div>
            	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-left">
                	<p><strong><?php the_time('j'); ?> / <?php the_time('F'); ?> / <?php the_time('Y'); ?> </strong></p>
                </div>
            </section>
            
            <div class="clearfix"></div>
			<?php if( have_rows('imagenes_de_muestra') ): while ( have_rows('imagenes_de_muestra') ) : the_row(); ?>
            <img src="<?php the_sub_field('imagen'); ?>"  class="jquery-note_1-1" />
            <?php endwhile; else : endif; ?>
        </div>
		<?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>
        
        <div id="comentarios" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	        <?php comments_template(); ?>
        </div>
        
    </div>
    <hr>

<?php get_footer(); ?>