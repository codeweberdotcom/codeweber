<?php
$root_theme = get_template_directory_uri();
$title = 'We bring solutions to make life easier for our customers.';
$imageurl = $root_theme . '/dist/img/photos/about7.jpg';
$imagealt ='';
$paragraph = 'We carefully consider our solutions to support each and every stage of your growth.';
$backgroundcolor = 'dark';
$textcolor = 'light';
$buttontext = 'Get Started';
$buttontext2 = 'Free Trial';
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
        $imageurl = esc_url( $image['sizes']['sandbox_hero_2'] );
        $imagealt = esc_attr( $image['alt'] );
    endif;

// --- Theme ---
 if ( get_sub_field( 'dark_or_white_light_or_dark' ) == 1 ) :
$backgroundcolor = 'light';
$textcolor = 'dark';
endif;
?>


<section  id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?>">
  <div class="container pt-8 pt-md-14">
    <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
      <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
        <figure class="rounded"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>" /></figure>
      </div>
      <!--/column -->
      <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 text-<?php echo $textcolor; ?>"><?php echo $title; ?></h1>
        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0 text-<?php echo $textcolor; ?>"><?php echo $paragraph; ?></p>
        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
          <span><a href="<?php echo $buttonlink; ?>" class="btn btn-lg btn-primary rounded-pill me-2"><?php echo $buttontext; ?></a></span>
          <span><a href="<?php echo $buttonlink2; ?>" class="btn btn-lg btn-outline-primary rounded-pill"><?php echo $buttontext2; ?></a></span>
        </div>
      </div>
      <!--/column -->
    </div>
    <!-- /.row -->
</section>
<!-- /section -->


