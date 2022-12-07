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
               if (get_sub_field('cw_title')) {
                  $title = $this->cw_the_title(get_sub_field('cw_title'), NULL, NULL, NULL, NULL, NULL, NULL,  NULL, false);
               } else {
                  $title = $this->cw_settings['title'];
               }
            endwhile;
         endif;
      } else {
         $title = $this->cw_settings['title'];
      }
      return $title;
   }

   private function cw_get_subtitle()
   {
      if (isset($this->cw_settings['subtitle']) && !$this->cw_settings['subtitle'] == NULL) {
         if (have_rows('cw_subtitle')) :
            while (have_rows('cw_subtitle')) : the_row();
               if (get_sub_field('cw_subtitle')) {
                  $subtitle = $this->cw_the_title(get_sub_field('cw_subtitle'), NULL, NULL, NULL, NULL, NULL, NULL, NULL, false);
               } else {
                  $subtitle = $this->cw_settings['subtitle'];
               }
            endwhile;
         endif;
      } else {
         $subtitle = $this->cw_settings['subtitle'];
      }
      return $subtitle;
   }


   public function cw_get_paragraph()
   {
      if (isset($this->cw_settings['paragraph']) && !$this->cw_settings['paragraph'] == NULL) {

         if (have_rows('cw_paragraph')) :
            while (have_rows('cw_paragraph')) : the_row();
               if (get_sub_field('cw_paragraph')) {
                  $paragraph = $this->cw_the_title(get_sub_field('cw_paragraph'), NULL, NULL, NULL, NULL, NULL, NULL, NULL, false);
               } else {
                  $paragraph = $this->cw_settings['paragraph'];
               }
            endwhile;
         else :
            $paragraph = $this->cw_settings['paragraph'];

         endif;
         return $paragraph;
      }
   }




   
   public function cw_the_title($title = NULL, $tag = NULL, $class = NULL, $display = NULL, $lead = NULL, $fs = NULL, $textalign = NULL, $cw_id = NULL, $echo = false)
   {
      if (
         strlen($title) == 0
      ) {
         return;
      }

      if (!isset($tag) || !$tag == NULL) {
         if (get_sub_field('cw_tag')) {
            $tag = get_sub_field('cw_tag');
         }
      }

      if (!isset($class) || !isset($display) || !isset($lead) || !isset($fs) || !isset($textalign)) {
         $class = 'class="';
         $class_array = array();
      }

      if (!isset($class) || !$class == NULL) {
         if (get_sub_field('cw_class')) {
            $class_array[] = get_sub_field('cw_class');
         }
      }

      if (!isset($display) || !$display == NULL) {
         if (get_sub_field('cw_class_display')) {
            $class_array[] = get_sub_field('cw_class_display');
         }
      }

      if (!isset($lead) || !$lead == NULL) {
         if (get_sub_field('class_lead')) {
            $class_array[] = get_sub_field('class_lead');
         }
      }

      if (!isset($fs) || !$fs == NULL) {
         if (get_sub_field('class_fs')) {
            $class_array[] = get_sub_field('class_fs');
         }
      }

      if (!isset($textalign) || !$textalign == NULL) {
         if (get_sub_field('text_align')) {
            $class_array[] = get_sub_field('text_align');
         }
      }

      if (!isset($cw_id) || !$cw_id == NULL) {
         if (get_sub_field('cw_id')) {
            $cw_id = 'id="' . get_sub_field('cw_id') . '"';
         }
      }

      $class .= implode(' ', $class_array);

      if (!isset($class) || !isset($display) || !isset($lead) || !isset($fs)) {
         $class .= '"';
      }

      if ($tag == NULL) {
         $title =  $title;
      } else {
         $title = '<' . $tag . ' ' . $class . ' ' . $cw_id . '>' . $title . '</' . $tag . '>';
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
