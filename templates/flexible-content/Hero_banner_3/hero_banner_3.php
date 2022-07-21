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
        array_push($typewriterarray, get_sub_field( 'text' ));   
   endwhile;
endif;
$typewriter = implode(",", $typewriterarray);

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
 if ( get_sub_field( 'dark_or_white_light_or_dark' ) == 0 ) :
$backgroundcolor = 'light';
$textcolor = 'dark';
endif;
?>

<section class="wrapper bg-<?php echo $backgroundcolor; ?> angled lower-start">
  <div class="container pt-7 pt-md-11 pb-8">
    <div class="row gx-0 gy-10 align-items-center">
      <div class="col-lg-6" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 text-<?php echo $textcolor; ?> mb-4"><?php echo $title; ?><br />
          <span class="typer text-primary text-nowrap" data-delay="100" data-words="<?php echo $typewriter; ?>">
          </span><span class="cursor text-primary" data-owner="typer"></span>
        </h1>
        <p class="lead fs-24 lh-sm text-<?php echo $textcolor; ?> mb-7 pe-md-18 pe-lg-0 pe-xxl-15"><?php echo $paragraph; ?></p>
        <div>
          <a class="btn btn-lg btn-primary rounded">Get Started</a>
        </div>
      </div>
      <!-- /column -->
      <div class="col-lg-5 offset-lg-1 mb-n18" data-cues="slideInDown">
        <div class="position-relative">
        <?php if ( get_sub_field( 'video' ) == 0 ) : ?>
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


