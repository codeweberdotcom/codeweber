<?php


//* --- Settings Class ACF---

class CW_Settings
{
   public $cw_settings;
   public $root_theme;
   public $title;
   public $subtitle;
   public $paragraph;
   public $typewriter;
   public $tag;
   public $color;

   public $patterntitle;
   public $patternsubtitle;
   public $patternparagraph;

   // public $video_url = '/dist/media/movie.mp4';
   // public $backgroundurl = '/dist/img/photos/bg4.jpg';
   // public $backgroundcolor = 'dark';
   // public $backgroundcolor_light = 0;
   // public $textcolor = 'white';
   // public $section_id = NULL;
   // public $section_classes = NULL;
   // public $column_one = NULL;
   // public $column_two = NULL;
   // public $style_parameters = NULL;

   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();
      $this->cw_settings = $cw_settings;
      $this->title = $this->cw_get_title();
      $this->subtitle = $this->cw_get_subtitle();
      $this->paragraph = $this->cw_get_paragraph();
   }

   public function cw_get_title()
   {
      if (isset($this->cw_settings['title']) && !$this->cw_settings['title'] == NULL) {

         if (have_rows('cw_title')) :
            while (have_rows('cw_title')) : the_row();
               $color = new CW_Color;
               if ($color->color == 'none') {
                  $this->color = '';
               } else {
                  $this->color = 'text-' . $color->color;
               }
               if ($this->cw_settings['patternTitle'] && !get_sub_field('cw_tag') && !get_sub_field('cw_class')) {
                  $pattern = $this->cw_settings['patternTitle'];
                  if (get_sub_field('cw_title')) {
                     $get_title = get_sub_field('cw_title');
                  } else {
                     $get_title = $this->cw_settings['title'];
                  }
                  $title = sprintf(
                     $pattern,
                     $get_title,
                  );
               } else {
                  if (get_sub_field('cw_title')) {
                     $title = $this->cw_the_title(get_sub_field('cw_title'), get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  } else {
                     $title = $this->cw_the_title($this->cw_settings['title'], get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  }
               }
            endwhile;
         endif;
      } else {
         if (isset($this->cw_settings['title'])) {
            $title = $this->cw_settings['title'];
         } else {
            $title = NULL;
         }
      }
      return $title;
   }

   private function cw_get_subtitle()
   {
      if (isset($this->cw_settings['subtitle']) && !$this->cw_settings['subtitle'] == NULL) {
         if (have_rows('cw_subtitle')) :
            while (have_rows('cw_subtitle')) : the_row();
               $color = new CW_Color;
               if ($color->color == 'none') {
                  $this->color = '';
               } else {
                  $this->color = 'text-' . $color->color;
               }
               if ($this->cw_settings['patternSubTitle'] && !get_sub_field('cw_tag') && !get_sub_field('cw_class')) {
                  $pattern = $this->cw_settings['patternSubTitle'];
                  if (get_sub_field('cw_subtitle')) {
                     $get_subtitle = get_sub_field('cw_subtitle');
                  } else {
                     $get_subtitle = $this->cw_settings['subtitle'];
                  }
                  $subtitle = sprintf(
                     $pattern,
                     $get_subtitle,
                  );
               } else {
                  if (get_sub_field('cw_subtitle')) {
                     $subtitle = $this->cw_the_title(get_sub_field('cw_subtitle'), get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  } else {
                     $subtitle = $this->cw_the_title($this->cw_settings['subtitle'], get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  }
               }
            endwhile;
         endif;
      } else {
         if (isset($this->cw_settings['subtitle'])) {
            $subtitle = $this->cw_settings['subtitle'];
         } else {
            $subtitle = NULL;
         }
      }
      return $subtitle;
   }


   public function cw_get_paragraph()
   {
      if (isset($this->cw_settings['paragraph']) && !$this->cw_settings['paragraph'] == NULL) {

         if (have_rows('cw_paragraph')) :
            while (have_rows('cw_paragraph')) : the_row();
               $color = new CW_Color;
               if ($color->color == 'none') {
                  $this->color = '';
               } else {
                  $this->color = 'text-' . $color->color;
               }
               if ($this->cw_settings['patternParagraph'] && !get_sub_field('cw_tag') && !get_sub_field('cw_class')) {
                  $pattern = $this->cw_settings['patternParagraph'];
                  if (get_sub_field('cw_paragraph')) {
                     $get_paragraph = get_sub_field('cw_paragraph');
                  } else {
                     $get_paragraph = $this->cw_settings['paragraph'];
                  }
                  $paragraph = sprintf(
                     $pattern,
                     $get_paragraph,
                  );
               } else {
                  if (get_sub_field('cw_paragraph')) {
                     $paragraph = $this->cw_the_title(get_sub_field('cw_paragraph'), get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  } else {
                     $paragraph = $this->cw_the_title($this->cw_settings['paragraph'], get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  }
               }
            endwhile;
         else :
            $paragraph = $this->cw_settings['paragraph'];
         endif;
         return $paragraph;
      }
   }

   public function cw_the_title(
      $title = NULL,
      $tag = NULL,
      $class = NULL,
      $display = NULL,
      $lead = NULL,
      $fs = NULL,
      $textalign = NULL,
      $cw_id = NULL,
      $cw_color = NULL,
      $echo = false
   ) {
      if (
         strlen($title) == 0
      ) {
         return;
      }

      if ($tag) {

         if ($class || $display   || $lead  || $fs || $textalign || $cw_color) {
            $classes = 'class="';
            $class_array = array();
            if ($class) {
               $class_array[] = $class;
            }

            if ($display) {
               $class_array[] = $display;
            }

            if ($lead) {
               $class_array[] = $lead;
            }

            if ($fs) {
               $class_array[] = $fs;
            }

            if ($cw_color) {
               $class_array[] = $cw_color;
            }


            if ($textalign) {
               $class_array[] = $textalign;
            }

            $classes .= implode(' ', $class_array);
         } else {
            $classes = NULL;
         }

         if ($cw_id) {
            $cw_id = 'id="' . $cw_id . '"';
         }

         if ($class || $display   || $lead  || $fs || $textalign || $cw_color) {
            $classes .= '"';
         }

         $title = '<' . $tag . ' ' . $classes . ' ' . $cw_id . '>' . $title . '</' . $tag . '>';
      } else {
         $title =  $title;
      }

      if (
         $echo
      ) {
         echo $title;
      } else {
         return $title;
      }
   }





   // public function GetDataACF()
   // {

   //    if (get_sub_field('mirror') == 0) :
   //       if (get_sub_field('reverse_mobile') == 1) :
   //          $this->column_one = 'order-1 order-lg-2';
   //          $this->column_two = '';
   //       elseif (get_sub_field('reverse_mobile') == 0) :
   //          $this->column_one = 'order-lg-2';
   //          $this->column_two = '';
   //       endif;
   //       $this->style_parameters = 'top: -2rem; right: -1.9rem;';
   //    elseif (get_sub_field('mirror') == 1) :
   //       if (get_sub_field('reverse_mobile') == 1) :
   //          $this->column_one = 'order-2 order-lg-1';
   //          $this->column_two = 'order-1 order-lg-2';
   //       elseif (get_sub_field('reverse_mobile') == 0) :
   //          $this->column_one = '';
   //          $this->column_two = '';
   //       endif;
   //       $this->style_parameters = 'top: -2rem; left: -1.9rem;';
   //    endif;

   //    if (get_sub_field('title')) :
   //       $this->title = get_sub_field('title');
   //    endif;

   //    if (get_sub_field('subtitle')) :
   //       $this->subtitle = get_sub_field('subtitle');
   //    endif;

   //    if (get_sub_field('paragraph')) :
   //       $this->paragraph = get_sub_field('paragraph');
   //    endif;

   //    if (get_sub_field('dark_or_white_light_or_dark') == 0) :
   //       $this->backgroundcolor = $this->backgroundcolor;
   //       $this->textcolor = 'light';
   //    elseif (get_sub_field('dark_or_white_light_or_dark') == 1) :
   //       if ($this->backgroundcolor_light == 0) :
   //          $this->backgroundcolor = $this->backgroundcolor_light;
   //          $this->textcolor = 'dark';
   //       else :
   //          $this->backgroundcolor = $this->backgroundcolor;
   //          $this->textcolor = 'light';
   //       endif;
   //    endif;

   //    /* --- Typewriter --- */
   //    if (have_rows('typewriter_effect_text')) :
   //       $typewriterarray = array();
   //       while (have_rows('typewriter_effect_text')) : the_row();
   //          array_push($typewriterarray, get_sub_field('text'));
   //       endwhile;
   //       $this->typewriter = implode(", ", $typewriterarray);
   //    endif;

   //    $background = get_sub_field('background');
   //    if ($background) :
   //       $this->backgroundurl = esc_url($background['url']);
   //    endif;

   //    $video_url = get_sub_field('video');
   //    if ($video_url) :
   //       $this->video_url = $video_url;
   //    endif;
   // }
};
