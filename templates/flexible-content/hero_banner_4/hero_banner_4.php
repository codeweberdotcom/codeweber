<?php
$root_theme = get_template_directory_uri();
$title = 'Just sit & relax while we take care of your business needs.';
$imageurl = $root_theme . '/dist/img/photos/about16.jpg';
$imagealt ='';
$paragraph = 'We make your spending stress-free for you to have the perfect control.';
$backgroundcolor = 'dark';
$textcolor = 'light';
$buttontext = 'Explore Now';
$buttontext2 = 'Contact Us';
$buttonlink = '#';
$buttonlink2 = '#';
$post_id = get_the_ID();
$section_id = $post_id .'_' . get_row_index(); 

// --- Button settings ---
 if ( have_rows( 'button_button' ) ) : 
   while ( have_rows( 'button_button' ) ) : the_row(); 
   $buttontext = get_sub_field( 'text_on_button' ); 
     $type_button = get_sub_field( 'select_type' ); 
          $button_link = get_sub_field( 'button_link' ); 
     if ( $button_link ) : 
       $post = $button_link; 
       setup_postdata( $post );  
      if($type_button == 'Page or Post') : 
        $buttonlink = get_permalink(); 
      endif; 
       wp_reset_postdata(); 
     endif; 
     $taxonomy = get_sub_field( 'taxonomy' ); 
     if ( $taxonomy && $type_button == 'Taxonomy') : 
      $buttonlink = esc_url( get_term_link( $taxonomy ) ); 
     endif; 
     if ( get_sub_field( 'url' ) && $type_button == 'URL') : 
      $buttonlink = get_sub_field( 'url' ); 
     endif; 
   endwhile; 
 endif;

 // --- Button 2 settings ---
 if ( have_rows( 'button_2_button' ) ) : 
  while ( have_rows( 'button_2_button' ) ) : the_row(); 
  $buttontext2 = get_sub_field( 'text_on_button' ); 
    $type_button2 = get_sub_field( 'select_type' ); 
         $button_link2 = get_sub_field( 'button_link' ); 
    if ( $button_link2 ) : 
      $post2 = $button_link2; 
      setup_postdata( $post2 );  
     if($type_button2 == 'Page or Post') : 
       $buttonlink2 = get_permalink(); 
     endif; 
      wp_reset_postdata(); 
    endif; 
    $taxonomy2 = get_sub_field( 'taxonomy' ); 
    if ( $taxonomy2 && $type_button2 == 'Taxonomy') : 
     $buttonlink2 = esc_url( get_term_link( $taxonomy2 ) ); 
    endif; 
    if ( get_sub_field( 'url' ) && $type_button == 'URL') : 
     $buttonlink2 = get_sub_field( 'url' ); 
    endif; 
  endwhile; 
endif;


// --- Title ---
if ( get_sub_field( 'title_title' ) ):
    $title = get_sub_field( 'title_title' );
endif;

// --- Paragraph ---
if ( get_sub_field( 'paragraph_paragraph' ) ):
    $paragraph = get_sub_field( 'paragraph_paragraph' );
endif;

// --- Image ---
$image = get_sub_field( 'image_image' ); 
	if ( $image ) : 
        $imageurl = esc_url( $image['sizes']['sandbox_hero_4'] );
        $imagealt = esc_attr( $image['alt'] );
    endif;

// --- Theme ---
 if ( get_sub_field( 'dark_or_white_light_or_dark' ) == 1 ) :
$backgroundcolor = 'light';
$textcolor = 'dark';
endif;
?>





<section id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?> position-relative min-vh-70 d-lg-flex align-items-center">
  <div class="rounded-4-lg-start col-lg-6 order-lg-2 position-lg-absolute top-0 end-0 image-wrapper bg-image bg-cover h-100 min-vh-50" data-image-src="<?php echo $imageurl; ?>">
  </div>
  <!--/column -->
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="mt-10 mt-md-11 mt-lg-n10 px-10 px-md-11 ps-lg-0 pe-lg-13 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
          <h1 class="display-1 mb-5"><?php echo $title; ?></h1>
          <p class="lead fs-25 lh-sm mb-7 pe-md-10"><?php echo $paragraph; ?></p>
          <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
            <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2"><?php echo $buttontext; ?></a></span>
            <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill"><?php echo $buttontext2; ?></a></span>
          </div>
        </div>
        <!--/div -->
      </div>
      <!--/column -->
    </div>
    <!--/.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
