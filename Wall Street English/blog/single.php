<?php include 'header.php'; ?>  
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">

    <!--Content-->
    <section id="content">
        <div class="container">
            <!--Posts-->
            <section id="the-post" class="col-md-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php
            $the_post = get_the_ID();
            function remove_images( $content ) {
			$postOutput = preg_replace('/<img[^>]+./','', $content);
			return $postOutput;
			}
			add_filter( 'the_content', 'remove_images', 100 );
            ?>
                <!--Post img-->
                <figure>
                    <span class="post-category"></span>
                    <img src="<?php echo catch_that_image() ?>">
                </figure>
                <!--End of Post img-->
                
                <!--Post Content-->
                <span class="line">
                    <!--<time>Postado em <?php echo get_the_time('j \d\e F \d\e Y', $post->ID) ?></time>-->
                </span>
                
				<span class="titulo">
                <h1><?php the_title() ?></h1>
				</span>
					
				<span class="line">
                    <span class="tags">Tags: Negócios, Intercâmbio, Entrevista</span>
                </span>
                <article class="artigo">
                
                    <?php the_content() ?>
                    
                    <?php
                    $quotes = get_post_meta($post->ID, 'texto_entre_aspas', false);
                    
                    if(!empty($quotes[0])){
						echo "<blockquote>$quotes[0]</blockquote>";
					}
					
					$video = get_post_meta($post->ID, 'video', false);
                    
                    if(!empty($video[0])){
						echo wp_oembed_get($video['0'], array('width'=>'2000', 'height'=>'500'));
					}
                    ?>
                    <!--Comments-->
					<?php comments_template(); ?>
                    <!--End of Comments-->
                
                </article>
                <!--End of Post Content-->
            <?php 
            	endwhile;
            	endif; 
            ?>    
            </section>
            <!--End of Posts-->

            <!--Secundary Content-->
            <aside class="col-md-4">
                <?php include 'sidebar.php' ?>
                <?php include 'latest-posts.php' ?>
            </aside>
            <!--End of Secundary Content-->
        </div>
    </section>
    <!--End of Content-->
    <?php remove_filter( 'the_content', 'remove_images', 100 ); ?>      
<?php include 'footer.php' ?>