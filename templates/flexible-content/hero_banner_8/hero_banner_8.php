<?php
$root_theme = get_template_directory_uri();
$title = 'Crafting project specific solutions with expertise.';
$imageurl = $root_theme . '/dist/img/photos/co3.png';
$imagealt ='';
$paragraph = 'We\'re a company that focuses on establishing long-term relationships with customers.';
$backgroundcolor = 'dark';
$textcolor = 'light';
$buttontext = 'Explore Now';
$buttontext2 = 'Contact Us';
$label_class = '<i class="uil uil-users-alt"></i>';
$labeltitle = '25000+';
$labeltext = 'Happy Clients';
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
        $size = 'sandbox_hero_8';
        $imageurl = esc_url( $image['sizes'][$size] );
        $imagealt = esc_attr( $image['alt'] );
    endif;

// --- Theme ---
 if ( get_sub_field( 'dark_or_white_light_or_dark' ) == 1 ) :
$backgroundcolor = 'light';
$textcolor = 'dark';
endif;

// --- Label on Photo ---

if ( have_rows( 'label_on_banner_label_on_banner' ) ) : 
  while ( have_rows( 'label_on_banner_label_on_banner' ) ) : the_row(); 
  if(get_sub_field( 'icon_icon' )):
  $label_class = get_sub_field( 'icon_icon' ); 
  endif;
  if(get_sub_field( 'number' )):
  $labeltitle = get_sub_field( 'number' ); 
  endif;
  if(get_sub_field( 'text' )):
  $labeltext = get_sub_field( 'text' ); 
  endif;
  endwhile; 
endif; 
?>

<section  id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?>">
  <div class="container">
    <div class="card bg-soft-primary rounded-4 mt-2 mb-13 mb-md-17">
      <div class="card-body p-md-10 py-xl-11 px-xl-15">
        <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
          <div class="col-lg-6 order-lg-2 d-flex position-relative">
            <img class="img-fluid ms-auto mx-auto me-lg-8" src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>" data-cue="fadeIn">
            <div data-cue="slideInRight" data-delay="300">
              <div class="card shadow-lg position-absolute" style="bottom: 10%; right: -3%;">
                <div class="card-body py-4 px-5">
                  <div class="d-flex flex-row align-items-center">
                    <div>
                      <div class="icon btn btn-circle btn-md btn-soft-primary disabled mx-auto me-3"><?php echo $label_class; ?></div>
                    </div>
                    <div>
                      <h3 class="counter mb-0 text-nowrap"><?php echo $labeltitle; ?></h3>
                      <p class="fs-14 lh-sm mb-0 text-nowrap"><?php echo $labeltext; ?></p>
                    </div>
                  </div>
                </div>
                <!--/.card-body -->
              </div>
              <!--/.card -->
            </div>
            <!--/div -->
          </div>
          <!--/column -->
          <div class="col-lg-6 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
            <h1 class="display-2 mb-5"><?php echo $title; ?></h1>
            <p class="lead fs-lg lh-sm mb-7 pe-xl-10"><?php echo $paragraph; ?></p>
            <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
              <span><a href="#" class="btn btn-lg btn-primary rounded-pill me-2"><?php echo $buttontext; ?></a></span>
              <span><a href="#" class="btn btn-lg btn-outline-primary rounded-pill"><?php echo $buttontext2; ?></a></span>
            </div>
          </div>
          <!--/column -->
        </div>
        <!--/.row -->
      </div>
      <!--/.card-body -->
    </div>
    <!--/.card -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->
