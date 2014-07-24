<?php get_header(); ?>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css">

    <!--Content-->
    <section id="content">
        <div class="container">
            <div class="row">
                <!--Posts-->
                <section id="posts" class="col-md-8">
                    <ul class="the-posts">
                        <?php
                        $i=0;
                        if (have_posts()) : while (have_posts()) : the_post(); 
                        	if(($i%2)==0){?>
								<li class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?> post">
	                            <a href="<?php the_permalink() ?>" class="entire-content">
	                                <span class="post-category"></span>
	                                <?php the_post_thumbnail('home-thumbs',array( 'class' => "col-md-6")); ?>
	                                <!--<img src="<?php echo get_the_post_thumbnail() ?>" class="col-md-6">-->
	                                <article class="post-content col-md-6">
	                                    <!--<time datetime="">Postado em <?php echo get_the_time('j \d\e F \d\e Y', $post->ID) ?></time>-->
	                                    <h1><?php the_title() ?></h1>
	                                    <blockquote>
	                                    	<?php 
	                                    		global $more;
										        $more = 0;
										        $text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
	                                			echo get_excerpt(259); 
	                                		?>
	                                    </blockquote>
	                                </article>
	                                <div class="clear"></div>
	                            </a>
	                        	</li>
						<?		
							}elseif(($i%2)==1){
						?>
							<li class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?> post">
	                            <a href="<?php the_permalink() ?>" class="entire-content">
	                                <span class="post-category"></span>
	                                <!--<img src="<?php echo get_the_post_thumbnail() ?>" class="col-md-6">-->
	                                <article class="post-content col-md-6">
	                                    <!--<time datetime="">Postado em <?php echo get_the_time('j \d\e F \d\e Y', $post->ID) ?></time>-->
	                                    <h1><?php the_title() ?></h1>
	                                    <blockquote>
	                                    	<?php 
	                                    		global $more;
										        $more = 0;
										        $text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
	                                			echo get_excerpt(259); 
	                                		?>
	                                    </blockquote>
	                                </article>
	                                <?php the_post_thumbnail('home-thumbs',array( 'class' => "col-md-6")); ?>
	                                <div class="clear"></div>
	                            </a>
	                        	</li>
						<?		
							}
						?>
                        
                    <?php 
                    $i++;
                    endwhile; else: ?>
					<p><?php _e('Nenhum post encontrado.'); ?></p>
					<?php endif; ?>
                    </ul>
                </section>
                <!--End of Posts-->

                <!--Secondary Content-->
                <aside class="col-md-4">
                    <?php get_sidebar(); ?>
                    <section id="lastests-posts">
                        <ul class="lastests-posts">
                            <?php 
                            	  $args = array(
									 'posts_per_page' => '2',
									 'category_name' => 'destaque'
								  );
                            	  query_posts( $args );
								  while (have_posts()) : the_post();
							?>
                            <li class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">
                                <a href="<?php the_permalink()?>" class="entire-content">
                                    <span class="post-category"></span>
                                    <article class="post-content">
                                        <!--<time datetime="">Postado em <?php echo get_the_time('j \d\e F \d\e Y', $post->ID) ?></time>-->
                                        <h1><?php the_title() ?></h1>
                                        <blockquote>
                                        	<?php 
	                                    		global $more;
										        $more = 0;
										        $text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
	                                			echo get_excerpt(259); 
                                			?>
                                        </blockquote>
                                    </article>
                                    <?php the_post_thumbnail('home-destaque'); ?>
                                </a>
                            </li>
                            <?php endwhile;
                            	  wp_reset_query();
                            ?>
                        </ul>
                    </section>
                </aside>
                <!--End of Secundary Content-->
            </div>
            <div class="navigation"><p><?php posts_nav_link(); ?></p></div>
            <!--Load more posts-->
            <!--<a href="#" title="Carregar mais artigos" class="load-more">Carregar artigos</a>-->
            <!--End of Load more posts-->
        </div>
    </section>
    <!--End of Content-->
<script type='text/javascript'>
/* <![CDATA[ */
var pbd_alp = {
	startPage: "1",
	maxPages: "2",
	nextLink: "http://www.wsenglish.com.br/blog/page/2/"
};
/* ]]> */
</script>
<script type='text/javascript' src='<?php bloginfo('template_directory'); ?>/css/load-posts.js'></script>        
<?php get_footer(); ?>