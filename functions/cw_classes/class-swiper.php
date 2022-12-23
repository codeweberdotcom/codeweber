<?php

//* ---Image Class ACF---

class CW_Swiper
{
   public $root_theme;
   public $data_margin;
   public $caption_bool;

   public $nav;
   public $nav_color;
   public $nav_position;

   public $dots;
   public $dots_color;
   public $dots_position;

   public $effect;

   public $items;
   public $items_xs;
   public $items_sm;
   public $items_md;
   public $items_lg;
   public $items_xl;
   public $items_xxl;

   public $autoplay;
   public $autoplay_time;
   public $loop;

   public $count_image;
   public $image_url_big;
   public $image_url_small;

   public $data;
   public $class;


   public $final_swiper;


   public function __construct($cw_settings)
   {
      $this->root_theme = get_template_directory_uri();

      $this->count_image = $this->cw_count_image($cw_settings);
      $this->data_margin = $this->cw_data_margin($cw_settings);
      $this->caption_bool = $this->cw_caption_bool($cw_settings);

      $this->nav = $this->cw_nav($cw_settings);
      $this->nav_color = $this->cw_nav_color($cw_settings);
      $this->nav_position = $this->cw_nav_position($cw_settings);

      $this->dots = $this->cw_dots($cw_settings);
      $this->dots_color = $this->cw_dots_color($cw_settings);
      $this->dots_position = $this->cw_dots_position($cw_settings);

      $this->effect = $this->cw_effect($cw_settings);

      $this->items = $this->cw_items($cw_settings);
      $this->items_xs = $this->cw_items_xs($cw_settings);
      $this->items_sm = $this->cw_items_sm($cw_settings);
      $this->items_md = $this->cw_items_md($cw_settings);
      $this->items_lg = $this->cw_items_lg($cw_settings);
      $this->items_xl = $this->cw_items_xl($cw_settings);
      $this->items_xxl = $this->cw_items_xxl($cw_settings);

      $this->autoplay = $this->cw_autoplay($cw_settings);
      $this->autoplay_time = $this->cw_autoplay_time($cw_settings);
      $this->loop = $this->cw_loop($cw_settings);



      $this->class = $this->cw_class($cw_settings);
      $this->data = $this->cw_data($cw_settings);

      $this->final_swiper = $this->cw_final_slider($cw_settings);
   }

   //Count Image
   public function cw_count_image($cw_settings)
   {
      if (is_array(get_sub_field('cw_images'))) {
         $count_image = count(get_sub_field('cw_images'));
      } else {
         $count_image = 0;
      }
      return $count_image;
   }


   //Data Margin
   public function cw_data_margin($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_margin')) {
               $data_margin = 'data-margin="' . get_sub_field('cw_margin') . '"';
            } else {
               $data_margin = 'data-margin="30"';
            }
         endwhile;
      else :
         $data_margin = NULL;
      endif;
      return $data_margin;
   }


   //Caption
   public function cw_caption_bool($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_caption') == 1) :
               $caption_bool = true;
            else :
               $caption_bool = false;
            endif;
         endwhile;
      else :
         $caption_bool = NULL;
      endif;
      return $caption_bool;
   }

   //Nav
   public function cw_nav($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_nav') == 1) :
               $nav = 'data-nav="true"';
            else :
               $nav = NULL;
            endif;
         endwhile;
      else :
         $nav = NULL;
      endif;
      return $nav;
   }

   //Nav Color
   public function cw_nav_color($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_nav_color') && get_sub_field('cw_nav') == 1) :
               $nav_color = get_sub_field('cw_nav_color');
            else :
               $nav_color = NULL;
            endif;
         endwhile;
      else :
         $nav_color = NULL;
      endif;
      return $nav_color;
   }

   //Nav Position
   public function cw_nav_position($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_nav_position') && get_sub_field('cw_nav') == 1) :
               $nav_position = get_sub_field('cw_nav_position');
            else :
               $nav_position = NULL;
            endif;
         endwhile;
      else :
         $nav_position = NULL;
      endif;
      return $nav_position;
   }


   //Dots
   public function cw_dots($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_dots') == 1) :
               $dots = 'data-dots="true"';
            else :
               $dots = NULL;
            endif;
         endwhile;
      else :
         $dots = NULL;
      endif;
      return $dots;
   }

   //Dots Color
   public function cw_dots_color($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_dots_color') && get_sub_field('cw_dots') == 1) :
               $dots_color = get_sub_field('cw_dots_color');
            else :
               $dots_color = NULL;
            endif;
         endwhile;
      else :
         $dots_color = NULL;
      endif;
      return $dots_color;
   }

   //Dots Position
   public function cw_dots_position($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_dots_position') && get_sub_field('cw_dots') == 1) :
               $dots_position = get_sub_field('cw_dots_position');
            else :
               $dots_position = NULL;
            endif;
         endwhile;
      else :
         $dots_position = NULL;
      endif;
      return $dots_position;
   }

   //Effect
   public function cw_effect($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_effect')) :
               $effect = 'data-effect="' . get_sub_field('cw_effect') . '"';
            else :
               $effect = NULL;
            endif;
         endwhile;
      else :
         $effect = NULL;
      endif;
      return $effect;
   }

   //Items
   public function cw_items($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items')) :
               $items = 'data-items="' . get_sub_field('cw_items') . '"';
            else :
               $items = NULL;
            endif;
         endwhile;
      else :
         $items = NULL;
      endif;
      return $items;
   }

   //items_xs
   public function cw_items_xs($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_xs')) :
               $items_xs = 'data-items-xs="' . get_sub_field('cw_items_xs') . '"';
            else :
               $items_xs = NULL;
            endif;
         endwhile;
      else :
         $items_xs = NULL;
      endif;
      return $items_xs;
   }

   //items_sm
   public function cw_items_sm($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_sm')) :
               $items_sm = 'data-items-sm="' . get_sub_field('cw_items_sm') . '"';
            else :
               $items_sm = NULL;
            endif;
         endwhile;
      else :
         $items_sm = NULL;
      endif;
      return $items_sm;
   }

   //items_md
   public function cw_items_md($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_md')) :
               $items_md = 'data-items-md="' . get_sub_field('cw_items_md') . '"';
            else :
               $items_md = NULL;
            endif;
         endwhile;
      else :
         $items_md = NULL;
      endif;
      return $items_md;
   }

   //items_lg
   public function cw_items_lg($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_lg')) :
               $items_lg = 'data-items-lg="' . get_sub_field('cw_items_lg') . '"';
            else :
               $items_lg = NULL;
            endif;
         endwhile;
      else :
         $items_lg = NULL;
      endif;
      return $items_lg;
   }

   //items_xl
   public function cw_items_xl($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_xl')) :
               $items_xl = 'data-items-xl="' . get_sub_field('cw_items_xl') . '"';
            else :
               $items_xl = NULL;
            endif;
         endwhile;
      else :
         $items_xl = NULL;
      endif;
      return $items_xl;
   }

   //items_xxl
   public function cw_items_xxl($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_items_xxl')) :
               $items_xxl = 'data-items-xxl="' . get_sub_field('cw_items_xxl') . '"';
            else :
               $items_xxl = NULL;
            endif;
         endwhile;
      else :
         $items_xxl = NULL;
      endif;
      return $items_xxl;
   }



   //Autoplay Time
   public function cw_autoplay_time($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_autoplay_time') && get_sub_field('cw_autoplay') == 1) {
               $autoplay_time = 'data-autoplaytime="' . get_sub_field('cw_autoplay_time') . '"';
            } else {
               $autoplay_time = 'data-autoplaytime="5000"';
            }
         endwhile;
      else :
         $autoplay_time = NULL;
      endif;
      return $autoplay_time;
   }

   //Loop
   public function cw_loop($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_loop') == 1) :
               $loop = 'data-loop="true"';
            else :
               $loop = NULL;
            endif;
         endwhile;
      else :
         $loop = NULL;
      endif;
      return $loop;
   }

   //Autoplay
   public function cw_autoplay($cw_settings)
   {
      if (have_rows('gallery')) :
         while (have_rows('gallery')) : the_row();
            if (get_sub_field('cw_autoplay') == 1) :
               $autoplay = 'data-autoplay="true"';
            else :
               $autoplay = NULL;
            endif;
         endwhile;
      else :
         $autoplay = NULL;
      endif;
      return $autoplay;
   }

   //Data
   public function cw_data($cw_settings)
   {
      $data_array = array();

      $data_margin = $this->data_margin;
      $nav = $this->nav;
      $dots = $this->dots;
      $effect = $this->effect;
      $items = $this->items;
      $items_xs = $this->items_xs;
      $items_sm = $this->items_sm;
      $items_md = $this->items_md;
      $items_lg = $this->items_lg;
      $items_xl = $this->items_xl;
      $items_xxl = $this->items_xxl;

      $autoplay = $this->autoplay;
      $autoplay_time = $this->autoplay_time;
      $loop = $this->loop;

      if ($data_margin) {
         $data_array[] = $data_margin;
      }

      if ($dots) {
         $data_array[] = $dots;
      }

      if ($nav) {
         $data_array[] = $nav;
      }
      if ($effect) {
         $data_array[] = $effect;
      }
      if ($items) {
         $data_array[] = $items;
      }
      if ($items_xs) {
         $data_array[] = $items_xs;
      }
      if ($items_sm) {
         $data_array[] = $items_sm;
      }
      if ($items_md) {
         $data_array[] = $items_md;
      }
      if ($items_lg) {
         $data_array[] = $items_lg;
      }
      if ($items_xl) {
         $data_array[] = $items_xl;
      }
      if ($items_xxl) {
         $data_array[] = $items_xxl;
      }
      if ($autoplay) {
         $data_array[] = $autoplay;
      }
      if ($autoplay_time) {
         $data_array[] = $autoplay_time;
      }
      if ($loop) {
         $data_array[] = $loop;
      }
      $data_array[] = 'data-autoheight="false"';

      $data = implode(' ', $data_array);
      return $data;
   }

   //Class
   public function cw_class($cw_settings)
   {
      $class_array = array();
      $nav = $this->nav;
      $nav_color = $this->nav_color;
      $nav_position = $this->nav_position;
      $dots = $this->dots;
      $dots_color = $this->dots_color;
      $dots_position = $this->dots_position;

      if ($nav_color && $nav) {
         $class_array[] = $nav_color;
      }
      if ($nav_position && $nav) {
         $class_array[] = $nav_position;
      }
      if ($dots_color && $dots) {
         $class_array[] = $dots_color;
      }
      if ($dots_position && $dots) {
         $class_array[] = $dots_position;
      }

      $class = implode(' ', $class_array);
      return $class;
   }



   //Final Slider
   public function cw_final_slider($cw_settings)
   {
      $count_image = $this->count_image;
      $final_slider = '';
      $data = $this->data;
      $class = $this->class;
      if ($count_image >= 2) {
         $final_slider .= '<div class="swiper-container ' . $class . '" ' . $data . '>
            <div class="swiper">
               <div class="swiper-wrapper">';
         if (have_rows('cw_images')) :
            while (have_rows('cw_images')) : the_row();
               $image = new CW_Image($cw_settings);
               if ($image->image_clean_title) {
                  $caption_image = '<div class="caption-wrapper p-8"><div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s"><div class="mb-0 h5">' . $image->image_clean_title . '</div></div><!--/.caption --></div><!--/.caption-wrapper -->';
               } else {
                  $caption_image = NULL;
               }
               $final_slider .= '<div class="swiper-slide">' . $image->final_image . $caption_image . '</div>';
            endwhile;
         endif;
         $final_slider .= '</div></div></div>';
      } elseif ($count_image == 1) {
         if (have_rows('cw_images')) :
            while (have_rows('cw_images')) : the_row();
               $image = new CW_Image($cw_settings);
               $final_slider = $image->final_image;
            endwhile;
         endif;
      } elseif ($count_image == 0) {
         $url = get_template_directory_uri() . $cw_settings['image_link'];
         $final_slider =  sprintf($cw_settings['image_pattern'], $url, $url, NULL);
      }

      return $final_slider;
   }
}
