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
                        if( is_category('empresa')) {
                        	$category_post = get_category_by_slug('empresa');
                        } else if( is_category('carreira') ) {
                        	$category_post = get_category_by_slug('carreira');
                        }else if( is_category('estudo') ) {
                        	$category_post = get_category_by_slug('estudo');
                        }else if( is_category('business') ) {
                        	$category_post = get_category_by_slug('business');
                        }else if( is_category('turismo') ) {
                        	$category_post = get_category_by_slug('turismo');
                        }else if( is_category('destaque') ) {
                        	$category_post = get_category_by_slug('destaque');
                        }                                             
                        
                        $args = array( 'numberposts' => -1, 'category' => $category_post->term_id );
                        $myposts = get_posts( $args );
                                    
                        if(count($myposts) > 0){
                        foreach( $myposts as $post ) : setup_postdata($post); 
                        
                        $args1 = array(
	                        'post_type' => 'attachment',
	                        'numberposts' => -1,
	                        'post_status' => null,
	                        'post_parent' => $post->ID,
	                        'cat'=>-7
                        );
                        $attachments = get_posts( $args1 );                                        
                        ?>
                                       
                        <li class="<?php $category = get_the_category(); echo $category[0]->cat_name; echo " ".$category[1]->cat_name; ?>">
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
                    <?php 
                    endforeach;
                    } 
                    else { 
                    echo "<p class='nenhum-encontrado'>Nenhum post encontrado.</p>";
                    } ?>
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
									 'posts_per_page' => 2,
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
                
            <!--Load more posts-->
            <!--<a href="#" title="Carregar mais artigos" class="load-more">Carregar artigos</a>-->
            <!--End of Load more posts-->
        </div>
    </section>
    <!--End of Content-->
        
<?php get_footer(); ?>