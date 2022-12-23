<?php

//* ---Background Class ACF---

class CW_Background
{
   public $root_theme;

   public $size_background;
   public $color_background;

   public $class_background;
   public $data_background;

   public $video_background;
   public $bool_video_background;

   public $url_video_background;
   public $preview_video_background;



   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();
      $this->size_background = $this->cw_size_background($cw_settings);
      $this->overlay_background = $this->cw_overlay_background($cw_settings);
      $this->data_background = $this->cw_data_background($cw_settings);
      $this->color_background = $this->cw_color_background($cw_settings);
      $this->video_background = $this->cw_video_background($cw_settings);
      $this->class_background = $this->cw_class_background($cw_settings);
      $this->url_pattern_background = $this->cw_pattern_url_background($cw_settings);
   }


   //Class
   public function cw_class_background($cw_settings = NULL)
   {
      $class_background = array();
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();

            $color = $this->color_background;
            $overlay = $this->overlay_background;
            $size = $this->size_background;

            if ($overlay !== 'none') {
               $class_background[] = $overlay;
            }
            if ($size !== 'none') {
               $class_background[] = $size;
            }
            if ($color !== 'none') {
               $class_background[] = $color;
            }
            if ($color) {
               $final_class_background = implode(' ', $class_background);
            } else {
               $final_class_background =  $cw_settings['background_class_default'];
            }

         endwhile;
      else :
         $final_class_background =  $cw_settings['background_class_default'];
      endif;

      return $final_class_background;
   }



   public function cw_pattern_url_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            $pattern_url_background = 'test';
         endwhile;
      else :
         $pattern_url_background = NULL;
      endif;
      return $pattern_url_background;
   }

   //Size
   public function cw_size_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            if (get_sub_field('cw_background_size') == 'auto') {
               $size_background = 'bg-auto';
            } elseif (get_sub_field('cw_background_size') == '100%') {
               $size_background = 'bg-full';
            } elseif (get_sub_field('cw_background_size') == 'cover') {
               $size_background = 'bg-cover';
            } elseif (get_sub_field('cw_background_size') == 'none') {
               $size_background = 'none';
            } else {
               $size_background = 'none';
            }
         endwhile;
      else :
         $size_background = 'none';
      endif;

      return $size_background;
   }

   //Overlay
   public function cw_overlay_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            $overlay_background = 'none';
            if (get_sub_field('cw_background_type') == 'Image' || get_sub_field('cw_background_type') == 'Video' || get_sub_field('cw_background_type') == 'Library') {
               if (get_sub_field('cw_background_overlay') == '50%') {
                  $overlay_background = 'bg-overlay';
               } elseif (get_sub_field('cw_background_overlay') == '40%') {
                  $overlay_background = 'bg-overlay bg-overlay-400';
               } elseif (get_sub_field('cw_background_overlay') == '30%') {
                  $overlay_background = 'bg-overlay bg-overlay-300';
               } else {
                  $overlay_background = 'none';
               }
            }
         endwhile;
      else :
         $overlay_background = 'none';
      endif;
      return $overlay_background;
   }


   //Data - Image 
   public function cw_data_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            if (get_sub_field('cw_background_type') == 'Image') {
               $cw_image_background = get_sub_field('cw_image_background');
               if ($cw_image_background) :
                  $background_data = 'data-image-src="'  . esc_url($cw_image_background['url']) . '"';
               elseif (isset($cw_settings['background_data_default'])) :
                  $background_data = 'data-image-src="' . get_template_directory_uri() .  $cw_settings['background_data_default'] . '"';
               else :
                  $background_data = NULL;
               endif;
            } elseif (get_sub_field('cw_background_type') == 'Pattern') {
               $cw_background_pattern = get_sub_field('cw_background_pattern');
               if ($cw_background_pattern) :
                  $background_data = 'data-image-src="'  . esc_url($cw_background_pattern['url']) . '"';
               elseif (isset($cw_settings['background_pattern_url'])) :
                  $background_data = 'data-image-src="' . get_template_directory_uri() .  $cw_settings['background_pattern_url'] . '"';
               else :
                  $background_data = NULL;
               endif;
            } elseif (get_sub_field('cw_background_type') == 'Library') {
               $background_data = 'data-image-src="'  . get_template_directory_uri() . '/dist/img/photos/' . get_sub_field('cw_library_image') . '"';
            } else {
               $background_data = NULL;
            }
         endwhile;
      else :
         $background_data = NULL;
      endif;
      return $background_data;
   }

   //Color 
   public function cw_color_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            if (get_sub_field('cw_background_type') == 'Color') {
               $color = new CW_Color;
               if ($color->bg_color == 'none') {
                  $color_background = '';
               } else {
                  $color_background = $color->bg_color;
               }
            } elseif (get_sub_field('cw_background_type') == 'Image') {
               if (get_sub_field('cw_image_background')) {
                  $color_background = 'image-wrapper bg-image';
               } else {
                  $color_background = 'none';
               }
            } elseif (get_sub_field('cw_background_type') == 'Pattern') {

               if (get_sub_field('cw_background_pattern')) {
                  $color_background = 'pattern-wrapper bg-image';
               } else {
                  $color_background = 'none';
               }
            } elseif (get_sub_field('cw_background_type') == 'Video') {

               $color_background = 'video-wrapper ratio ratio-16x9';
               $this->bool_video_background = true;
            } elseif (get_sub_field('cw_background_type') == 'Library') {

               if (get_sub_field('cw_library_image')) {
                  $color_background = 'image-wrapper bg-image';
               } else {
                  $color_background = 'none';
               }
            } else {
               $color_background = NULL;
            }
         endwhile;
      else :
         $color_background = 'none';
      endif;
      return $color_background;
   }

   //Video 
   public function cw_video_background($cw_settings = NULL)
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            if (get_sub_field('cw_background_type') == 'Video') {

               if (isset($cw_settings['background_video_url']) && !$cw_settings['background_video_url'] == NULL) {
                  $cw_video = get_sub_field('cw_video');
                  if ($cw_video) :
                     $this->url_video_background = esc_url($cw_video['url']);
                  else :
                     $this->url_video_background = get_template_directory_uri() . $cw_settings['background_video_url'];
                  endif;
               }

               if (isset($cw_settings['background_video_preview']) && !$cw_settings['background_video_preview'] == NULL) {
                  $cw_video_preview = get_sub_field('cw_video_preview');
                  if ($cw_video_preview) :
                     $this->preview_video_background = esc_url($cw_video_preview['url']);
                  else :
                     $this->preview_video_background = get_template_directory_uri() . $cw_settings['background_video_preview'];
                  endif;
               }
            }
         endwhile;
      endif;
   }
}
