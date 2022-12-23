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

   public $buttons;

   public $patterntitle;
   public $patternsubtitle;
   public $patternparagraph;

   public $background_object;
   public $background_class;
   public $background_data;
   public $background_video_bool;
   public $background_video_url;
   public $background_video_preview;
   public $images;

   public $swiper;
   public $swiper_final;

   public $divider_class;
   public $divider_wave;



   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();

      $this->cw_settings = $cw_settings;
      $this->typewriter = $this->cw_typewriter($cw_settings);
      $this->title = $this->cw_get_title();
      $this->subtitle = $this->cw_get_subtitle();
      $this->paragraph = $this->cw_get_paragraph();
      $this->buttons = $this->cw_buttons();
      $this->background_object = $this->cw_background_data($cw_settings);
      $this->images = $this->cw_images($cw_settings);
      $this->divider_class = $this->cw_divider_class($cw_settings);
      $this->divider_wave = $this->cw_divider_wave($cw_settings);



      $this->swiper_final = $this->cw_swiper_final($cw_settings);
   }


   public function cw_typewriter($cw_settings)
   {
      if (isset($this->cw_settings['typewriter']) && !$this->cw_settings['typewriter'] == NULL) {
         $typewriter = new CW_Typewriter($cw_settings = $cw_settings);
         $typewriter = $typewriter->typewriter_final;
      } else {
         $typewriter = NULL;
      }
      return $typewriter;
   }


   public function cw_swiper_final($cw_settings)
   {
      if (isset($this->cw_settings['swiper']) && !$this->cw_settings['swiper'] == NULL) {
         $swiper = new CW_Swiper($cw_settings = $cw_settings);
         $swiper_final = $swiper->final_swiper;
      } else {
         $swiper_final = NULL;
      }
      return $swiper_final;
   }


   public function cw_background_data($cw_settings = NULL)
   {
      $background_object = new CW_Background($cw_settings = $cw_settings);
      $this->background_class = $background_object->class_background;
      $this->background_data = $background_object->data_background;
      $this->background_video_bool = $background_object->bool_video_background;
      $this->background_video_url = $background_object->url_video_background;
      $this->background_video_preview = $background_object->preview_video_background;
      return $background_object;
   }

   public function cw_images($cw_settings)
   {
      if (isset($this->cw_settings['image_pattern']) && !$this->cw_settings['image_pattern'] == NULL) {
         $image_object = new CW_Image($cw_settings = $cw_settings);
         $images = $image_object->final_image;
      } else {
         $images = NULL;
      }
      return $images;
   }

   public function cw_buttons()
   {
      if (isset($this->cw_settings['buttons_pattern']) && !$this->cw_settings['buttons_pattern'] == NULL) {
         $buttons_object = new CW_Buttons($this->cw_settings['buttons_pattern'], $this->cw_settings['buttons']);
         if ($buttons_object->final_buttons !== false) {
            $buttons = $buttons_object->final_buttons;
         }
      } else {
         $buttons = NULL;
      }
      return $buttons;
   }

   public function cw_divider_class($cw_settings)
   {
      if (isset($cw_settings['divider']) && $cw_settings['divider'] == true) {
         $divider = new CW_Divider;
         $divider_class = $divider->class_divider;
      } else {
         $divider_class = NULL;
      }
      return $divider_class;
   }

   public function cw_divider_wave($cw_settings)
   {
      if (isset($cw_settings['divider']) && $cw_settings['divider'] == true) {
         $divider = new CW_Divider;
         $div_wave = $divider->div_wave;
      } else {
         $div_wave = NULL;
      }
      return $div_wave;
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
                  $typewriter = $this->typewriter;
                  $title = sprintf(
                     $pattern,
                     $get_title,
                     $typewriter,
                  );
               } else {
                  if (get_sub_field('cw_title')) {
                     $title = $this->cw_the_title(get_sub_field('cw_title'), get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  } else {
                     $title = $this->cw_the_title($this->cw_settings['title'], get_sub_field('cw_tag'), get_sub_field('cw_class'), get_sub_field('cw_class_display'), get_sub_field('class_lead'), get_sub_field('class_fs'), get_sub_field('text_align'),  get_sub_field('cw_id'), $this->color, false);
                  }
               }
            endwhile;
         else :
            $title = NULL;
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
};
