<?php
$root_theme = get_template_directory_uri();
$title = 'Sandbox focuses on';
$videourl = $root_theme . '/dist/media/movie.mp4';
$typewriter = 'customer satisfaction,business needs,creative ideas';
$imageurl = $root_theme . '/dist/img/photos/about13.jpg';
$imagealt ='';
$paragraph = 'We carefully consider our solutions to support each and every stage of your growth.';
$backgroundcolor = 'dark';
$textcolor = 'light';
$buttontext = '';
$buttonlink = '#';
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


// --- Title ---
if ( get_sub_field( 'title_title' ) ):
    $title = get_sub_field( 'title_title' );
endif;

// --- Paragraph ---
if ( get_sub_field( 'paragraph_paragraph' ) ):
    $paragraph = get_sub_field( 'paragraph_paragraph' );
endif;

// --- Typewriter ---
if ( have_rows( 'typewriter_effect_text_typewriter_effect_text' ) ) : 
$typewriterarray = array();
   while ( have_rows( 'typewriter_effect_text_typewriter_effect_text' ) ) : the_row(); 
   $text = get_sub_field( 'text' );
   if(!empty($text)) : 
array_push($typewriterarray, $text);   
   endif;
   endwhile;
   $typewriter = implode(",", $typewriterarray);
endif;


// --- Image ---
$image = get_sub_field( 'image_image' ); 
	if ( $image ) : 
        $imageurl = esc_url( $image['sizes']['sandbox_hero_3'] );
        $imagealt = esc_attr( $image['alt'] );
    endif;

// --- Video ---
$video = get_sub_field( 'video_video' );
if($video):
   $videourl = get_sub_field( 'video_video' );
endif;

// --- Theme ---
 if ( get_sub_field( 'dark_or_white_light_or_dark' ) == 1 ) :
$backgroundcolor = 'light';
$textcolor = 'dark';
endif;
?>

<section id="<?php echo $section_id; ?>" class="wrapper bg-<?php echo $backgroundcolor; ?> angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-<?php echo $textcolor; ?> mb-4"><?php echo $title; ?><br />
          <span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $typewriter; ?>">
          </span><span class="cursor text-primary" data-owner="typer"></span>
        </h1>
        <p class="lead fs-24 lh-sm text-<?php echo $textcolor; ?> mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $paragraph; ?></p>
        <div>
          <a href="<?php echo $buttonlink; ?>" class="btn btn-lg btn-primary rounded"><?php echo $buttontext; ?></a>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative">
          <?php if ( get_sub_field( 'show_video' ) == 1 ) : ?>
            <a href="<?php echo $videourl; ?>" class="btn btn-circle btn-primary btn-play ripple mx-auto mb-6 position-absolute" style="top:50%; left: 50%; transform: translate(-50%,-50%); z-index:3;" data-glightbox><i class="icn-caret-right"></i></a>
			<?php endif; ?>
          <figure class="rounded shadow-lg"><img src="<?php echo $imageurl; ?>" srcset="<?php echo $imageurl; ?>" alt="<?php echo $imagealt; ?>"></figure>
        </div>
        <!-- /div -->
      </div>
      <!-- /column -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->
</section>
<!-- /section -->


