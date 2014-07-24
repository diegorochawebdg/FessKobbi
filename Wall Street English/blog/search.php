<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<!--<?php header('Location: http://www.example.com/search/' . $_GET['s']); ?>-->
<?php
global $query_string;

$query_args = explode("&", $query_string);
$search_query = array();

foreach($query_args as $key => $string) {
    $query_split = explode("=", $string);
    $search_query[$query_split[0]] = urldecode($query_split[1]);
} // foreach

$search = new WP_Query($search_query);
?>
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home.css">

    <!--Content-->
    <section id="content">
        <div class="container">
            <div class="row">
                <!--Posts-->
                <section id="posts" class="col-md-8">
                        
                    <script type="text/javascript">
                        jQuery(document).ready(function(e){

                            /*Main Menu hover*/
                            jQuery(".content-menu li").hover(function(e){
                                jQuery(this).css({backgroundColor:"#003C4E" }, 250);
                            }, function(e){
                                jQuery(this).css({backgroundColor:""}, 250);
                            });
                            /*End of Main Menu hover*/

                            /*Get the url of select from Bairros*/
                            var optionValue = jQuery("#bairros-list-content").val();
                            jQuery("#bairros-list-content").change(function(e){
                                if(jQuery(this).find(':selected').val() !== 'Selecione aqui outros bairros:'){
                                    optionValue = jQuery("#bairros-list-content").val();
                                    optionValue = optionValue.replace(/\s+/g, '+');
                                    window.location = site_url + '?s=' + optionValue;
                                }
                            });
                            /*End of Get the url of select from Bairros*/


                        });
                    </script>
                        
                        <h1 class="page-title"><?php printf( __( 'Resultados da pesquisa por: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                        <ul class="the-posts">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post(); ?>

                                <li class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">
                                    <a href="<?php the_permalink() ?>" class="entire-content">
                                        <span class="post-category"></span>
                                        <?php the_post_thumbnail('home-thumbs',array( 'class' => "col-md-6")); ?>
                                        <!--<img src="<?php echo get_the_post_thumbnail() ?>" class="col-md-6">-->
                                        <article class="post-content col-md-6">
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

                            <?php endwhile; ?>

                            <?php else : ?>

                                <li><?php _e('Nenhum post encontrado.'); ?></li>
                            </ul>
                        <?php endif; ?>
                        
                        
                        
                    </ul>
                </section>
                <!--End of Posts-->

                <!--Secondary Content-->
                <aside class="col-md-4">
                    <?php get_sidebar(); ?>
                    <?php include 'latest-posts.php' ?>
                </aside>
                <!--End of Secundary Content-->
            </div>
        </div>
    </section>
    <!--End of Content-->
        
<?php get_footer(); ?>