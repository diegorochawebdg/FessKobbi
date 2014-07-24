<?php get_header(); ?>  
	
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/contato.min.css">

    <!--Content-->
    <section id="content">
        <div class="container">
            <div class="row">
                <!--Contato Content-->
                <section id="contato-content" class="col-md-8">
                    <div class="page-icon"></div>
                    <h1><?php the_title(); ?></h1>
                    
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                    
                    <!--Main Address-->
                    <h2>Escritório central</h2>
                    <address>
                        <span>Rua Alexandre Dumas, 1.1610 &bull; São Paulo &bull; SP</span>
                        <span>Telefone: <a href="tel:01129334700">2933-4700</a></span>
                        <span>E-mail <a href="mailto:corporate@wallstreetenglish.com.br">corporate@wallstreetenglish.com.br</a></span>
                    </address>
                    <!--End of Main Address-->
                    
                    <h3>Conheça nossos centros:</h3>
                    
                    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
                    <script type="text/javascript">
                        (function($) {
                            function render_map( $el ) {
                                var $markers = $el.find('.marker');
                                var args = {
                                    zoom		: 16,
                                    center		: new google.maps.LatLng(0, 0),
                                    mapTypeId	: google.maps.MapTypeId.ROADMAP
                                };        	
                                var map = new google.maps.Map( $el[0], args);
                                map.markers = [];
                                $markers.each(function(){

                                    add_marker( $(this), map );

                                });
                                center_map( map );

                            }

                            function add_marker( $marker, map ) {
                                var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
                                var marker = new google.maps.Marker({
                                    position	: latlng,
                                    map			: map
                                });
                                map.markers.push( marker );
                                if( $marker.html() )
                                {
                                    var infowindow = new google.maps.InfoWindow({
                                        content		: $marker.html()
                                    });
                                    google.maps.event.addListener(marker, 'click', function() {

                                        infowindow.open( map, marker );

                                    });
                                }

                            }

                            function center_map( map ) {

                                // vars
                                var bounds = new google.maps.LatLngBounds();

                                // loop through all markers and create bounds
                                $.each( map.markers, function( i, marker ){

                                    var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

                                    bounds.extend( latlng );

                                });

                                // only 1 marker?
                                if( map.markers.length == 1 )
                                {
                                    // set center of map
                                    map.setCenter( bounds.getCenter() );
                                    map.setZoom( 16 );
                                }
                                else
                                {
                                    // fit to bounds
                                    map.fitBounds( bounds );
                                }

                            }

                            $(document).ready(function(){

                                $('.acf-map').each(function(){

                                    render_map( $(this) );

                                });

                            });

                        })(jQuery);
                    </script>
                    
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php if( have_rows('endereco_instituto') ): ?>
                            <ul>
                            <?php 
                                while( have_rows('endereco_instituto') ): the_row();
                                $location = get_sub_field('mapa');
                            ?>
                                    <li>
                                        <div class="col-md-7">
                                            <div class="acf-map" style="height:190px;">
                                                <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <h2><?php the_sub_field('titulo'); ?></h2>
                                            <address><?php echo $location['address']; ?></address>
                                            <span class="tel-contato"><?php the_sub_field('tel'); ?></span>
                                            <a href="mailto:<?php the_sub_field('email'); ?>" class="email-contato"><?php the_sub_field('email'); ?></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </li>	

                                <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        <?php endwhile ?>
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
        
<?php get_footer(); ?>  