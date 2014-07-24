<?php include 'header.php'; ?>  
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/sobre.css">

    <!--Content-->
    <section id="content">
        <div class="container">
            <div class="row">
                <!--Contato Content-->
                <section id="sobre-content" class="col-md-8">
                    <div class="page-icon"></div>
                    <h1><?php the_title(); ?></h1>
                    
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; endif; ?>
                    
                    <!--Os serviços-->
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php if(have_rows('servicos')): ?>
                            <ul>
                            <?php while(have_rows('servicos')) : the_row(); ?>
                                <li>
                                    <div class="col-md-6">
                                        <?php echo get_sub_field('servico_txt'); ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php $img = get_sub_field('servico_img'); ?>
                                        <img src="<?php echo $img['sizes']['medium']; ?>" alt="<?php echo $img['title'] ?>">
                                    </div>
                                    <div class="clearfix"></div>
                                </li>
                            <?php endwhile ?>
                            </ul>
                        <?php endif ?>
                    <?php endwhile ?>
                    <!--End of Os serviços-->
                    
                    <h2>Descubra porque na Wall Street English todos aprendem a falar inglês</h2>
                    <?php if(get_field('video')): ?>
                        <?php
                            $embed_code = wp_oembed_get( get_field('video') );
                            echo $embed_code;
                        ?>
                    <?php endif ?>
                </section>
                <!--End of Contato Content-->

                <!--Secundary Content-->
                <aside class="col-md-4">
                    <?php include 'sidebar.php' ?>
                    <?php include 'latest-posts.php' ?>
                </aside>
                <!--End of Secundary Content-->
            </div>
        </div>
    </section>
    <!--End of Content-->
        
<?php include 'footer.php' ?>