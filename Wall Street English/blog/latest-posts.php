<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lastests-posts.css">
<section id="lastests-posts">
    <ul class="lastests-posts">
        <?php
        $args = array(
			'posts_per_page' => 2,
			'post__not_in' => array($the_post)
		);
        query_posts( $args );
		while (have_posts()) : the_post();
        ?>
        <li class="<?php $category = get_the_category(); echo $category[0]->cat_name; ?>">
            <a href="<?php the_permalink()?>" class="entire-content">
                <?php the_post_thumbnail('home-destaque'); ?>
                <article class="post-content">
                    <h1><?php the_title() ?></h1>
                </article>
            </a>
        </li>
        <?php
        endwhile;
        ?>
    </ul>
</section>