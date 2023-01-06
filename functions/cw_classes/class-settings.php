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
      $this->title = $this->cw_get_title($cw_settings);
      $this->subtitle = $this->cw_get_subtitle($cw_settings);
      $this->paragraph = $this->cw_get_paragraph($cw_settings);
      $this->buttons = $this->cw_buttons($cw_settings);
      $this->background_object = $this->cw_background_data($cw_settings);
      $this->images = $this->cw_images($cw_settings);
      $this->divider_class = $this->cw_divider_class($cw_settings);
      $this->divider_wave = $this->cw_divider_wave($cw_settings);
      $this->swiper_final = $this->cw_swiper_final($cw_settings);
   }

   //Typewriter
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

   //Swiper Final
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

   //Background Data
   public function cw_background_data($cw_settings = NULL)
   {

      if (isset($this->cw_settings['background_class_default']) && !$this->cw_settings['background_class_default'] == NULL) {
         $background_object = new CW_Background($cw_settings = $cw_settings);
         $this->background_class = $background_object->class_background;
         $this->background_data = $background_object->data_background;
         $this->background_video_bool = $background_object->bool_video_background;
         $this->background_video_url = $background_object->url_video_background;
         $this->background_video_preview = $background_object->preview_video_background;
      } else {
         $background_object = NULL;
      }
      return $background_object;
   }

   //Images
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

   //Buttons
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

   //Divider Class
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

   //Divider Wave
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

   //Title text
   public function cw_get_title($cw_settings)
   {
      if (isset($this->cw_settings['title']) && !$this->cw_settings['title'] == NULL) {
         if ($cw_settings['patternTitle'] !== NULL) {
            $pattern = $cw_settings['patternTitle'];
         } else {
            $pattern = NULL;
         }
         if ($cw_settings['title'] !== NULL) {
            $title_text = $cw_settings['title'];
         } else {
            $title_text = NULL;
         }
         $title_object = new CW_Title(NULL, $title_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern);
         $title = $title_object->title_final;
      } else {
         if (isset($this->cw_settings['title'])) {
            $title = $this->cw_settings['title'];
         } else {
            $title = NULL;
         }
      }
      return $title;
   }

   //Paragraph text
   public function cw_get_paragraph($cw_settings)
   {

      if (isset($cw_settings['paragraph']) && !$cw_settings['paragraph'] == NULL) {
         if ($cw_settings['patternParagraph'] !== NULL) {
            $pattern = $cw_settings['patternParagraph'];
         } else {
            $pattern = NULL;
         }
         if ($cw_settings['paragraph'] !== NULL) {
            $pargraph_text = $cw_settings['paragraph'];
         } else {
            $pargraph_text = NULL;
         }
         $paragraph_object = new CW_Parargraph(NULL, $pargraph_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern);
         $paragraph = $paragraph_object->paragraph_final;
      } else {
         if (isset($cw_settings['paragraph'])) {
            $paragraph = $cw_settings['paragraph'];
         } else {
            $paragraph = NULL;
         }
      }
      return $paragraph;
   }




   //SubTitle text
   private function cw_get_subtitle($cw_settings)
   {
      if (isset($cw_settings['subtitle']) && !$cw_settings['subtitle'] == NULL) {
         if ($cw_settings['patternSubtitle'] !== NULL) {
            $pattern = $cw_settings['patternSubtitle'];
         } else {
            $pattern = NULL;
         }
         if ($cw_settings['subtitle'] !== NULL) {
            $subtitle_text = $cw_settings['subtitle'];
         } else {
            $subtitle_text = NULL;
         }
         $subtitle_object = new CW_SubTitle(NULL, $subtitle_text, NULL, NULL, NULL, NULL, NULL, NULL, NULL, $pattern);
         $subtitle = $subtitle_object->sub_title_final;
      } else {
         if (isset($cw_settings['subtitle'])) {
            $subtitle = $cw_settings['subtitle'];
         } else {
            $subtitle = NULL;
         }
      }

      return $subtitle;
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
}
