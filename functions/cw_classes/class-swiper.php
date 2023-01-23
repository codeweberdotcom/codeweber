<?php

//* ---Image Class ACF---

class CW_Swiper
{
   public $root_theme;
   public $data_margin;
   public $caption_bool;

   public $swiper_container_class;

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
   public $image_shape;
   public $image_demo;

   public $swiper_data;

   public $custom_settings_bool = 'false';

   public $final_swiper;


   public function __construct(
      $swiper_container_class,
      $image_class,
      $image_pattern,
      $image_thumb_size,
      $image_big_size,
      $img_link,
      $data_margin,
      $nav,
      $nav_color,
      $nav_position,
      $dots,
      $dots_color,
      $dots_position,
      $swiper_effect,
      $base_items,
      $items_xs,
      $items_sm,
      $items_md,
      $items_lg,
      $items_xl,
      $items_xxl,
      $autoplay,
      $autoplay_time,
      $loop,
      $autoheight,
      $wrapper_image_class,
      $image_demo,
      $image_shape,
      $label_demo,
      $label_pattern
   ) {
      $this->root_theme = get_template_directory_uri();
      $this->custom_settings_bool = $this->cw_custom_settings_bool();
      $this->count_image = $this->cw_count_image();
      $this->image_shape = $this->cw_image_shape($image_shape);
      $this->image_demo = $this->cw_image_demo($image_demo);
      $this->data_margin = $this->cw_data_margin($data_margin);
      $this->caption_bool = $this->cw_caption_bool();

      $this->nav = $this->cw_nav($nav);
      $this->nav_color = $this->cw_nav_color($nav_color);
      $this->nav_position = $this->cw_nav_position($nav_position);

      $this->dots = $this->cw_dots($dots);
      $this->dots_color = $this->cw_dots_color($dots_color);
      $this->dots_position = $this->cw_dots_position($dots_position);

      $this->effect = $this->cw_effect($swiper_effect);

      $this->items = $this->cw_items($base_items);
      $this->items_xs = $this->cw_items_xs($items_xs);
      $this->items_sm = $this->cw_items_sm($items_sm);
      $this->items_md = $this->cw_items_md($items_md);
      $this->items_lg = $this->cw_items_lg($items_lg);
      $this->items_xl = $this->cw_items_xl($items_xl);
      $this->items_xxl = $this->cw_items_xxl($items_xxl);

      $this->autoplay = $this->cw_autoplay($autoplay);
      $this->autoplay_time = $this->cw_autoplay_time($autoplay_time);
      $this->loop = $this->cw_loop($loop);

      $this->swiper_container_class = $this->cw_class($swiper_container_class);
      $this->swiper_data = $this->cw_data();

      $this->final_swiper = $this->cw_final_slider(
         $image_class,
         $image_pattern,
         $image_thumb_size,
         $image_big_size,
         $img_link,
         $wrapper_image_class,
         $image_demo,
         $label_demo,
         $label_pattern
      );
   }


   //Image demo
   public function cw_image_demo($image_demo)
   {
      if ($image_demo !== NULL) {
         $cw_image_demo = $image_demo;
      } else {
         $cw_image_demo = NULL;
      }

      return $cw_image_demo;
   }


   //Custom settings bool 
   public function cw_custom_settings_bool()
   {
      if (get_sub_field('custom_gallery') == 1) :
         $cw_custom_settings_bool =  'true';
      else :
         $cw_custom_settings_bool = 'false';
      endif;

      return $cw_custom_settings_bool;
   }

   //Count Image
   public function cw_count_image()
   {
      if (is_array(get_sub_field('cw_images'))) {
         $cw_count_image = count(get_sub_field('cw_images'));
      } else {
         $cw_count_image = 0;
      }
      return $cw_count_image;
   }

   //Image Shape
   public function cw_image_shape($image_shape)
   {
      if ($image_shape !== NULL) {
         $cw_image_shape = $image_shape;
      } else {
         $cw_image_shape = NULL;
      }
      return $cw_image_shape;
   }

   //Data Margin
   public function cw_data_margin($data_margin)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_margin')) {
                  $cw_data_margin = get_sub_field('cw_margin');
               } else {
                  $cw_data_margin = NULL;
               }
            }
         } else {
            $cw_data_margin = NULL;
         }
      } else {
         $cw_data_margin = $data_margin;
      }
      return $cw_data_margin;
   }


   //Caption
   public function cw_caption_bool()
   {
      if (have_rows('gallery')) {
         while (have_rows('gallery')) {
            the_row();
            if (get_sub_field('cw_caption') == 1) {
               $cw_caption_bool = true;
            } else {
               $cw_caption_bool = false;
            }
         }
      } else {
         $cw_caption_bool = NULL;
      }
      return $cw_caption_bool;
   }

   //Nav
   public function cw_nav($nav)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_nav') == 1) {
                  $cw_nav = 'true';
               } else {
                  $cw_nav = 'false';
               }
            }
         } else {
            $cw_nav = NULL;
         }
      } else {
         $cw_nav = $nav;
      }
      return $cw_nav;
   }

   //Nav Color
   public function cw_nav_color($nav_color)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_nav_color') && get_sub_field('cw_nav') == 1) {
                  $cw_nav_color = get_sub_field('cw_nav_color');
               } else {
                  $cw_nav_color = $nav_color;
               }
            }
         } else {
            $cw_nav_color = NULL;
         }
      } else {
         $cw_nav_color = $nav_color;
      }
      return $cw_nav_color;
   }

   //Nav Position
   public function cw_nav_position($nav_position)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_nav_position') && get_sub_field('cw_nav') == 1) {
                  $cw_nav_position = get_sub_field('cw_nav_position');
               } else {
                  $cw_nav_position = $nav_position;
               }
            }
         } else {
            $cw_nav_position = NULL;
         }
      } else {
         $cw_nav_position = $nav_position;
      }
      return $cw_nav_position;
   }


   //Dots
   public function cw_dots($dots)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_dots') == 1) {
                  $cw_dots = 'true';
               } else {
                  $cw_dots = 'false';
               }
            }
         } else {
            $cw_dots = NULL;
         }
      } else {
         $cw_dots = $dots;
      }

      return $cw_dots;
   }

   //Dots Color
   public function cw_dots_color($dots_color)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_dots_color') && get_sub_field('cw_dots') == 1) {
                  $cw_dots_color = get_sub_field('cw_dots_color');
               } else {
                  $cw_dots_color = NULL;
               }
            }
         } else {
            $cw_dots_color = NULL;
         }
      } else {
         $cw_dots_color = $dots_color;
      }
      return $cw_dots_color;
   }

   //Dots Position
   public function cw_dots_position($dots_position)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_dots_position') && get_sub_field('cw_dots') == 1) {
                  $cw_dots_position = get_sub_field('cw_dots_position');
               } else {
                  $cw_dots_position = NULL;
               }
            }
         } else {
            $cw_dots_position = NULL;
         }
      } else {
         $cw_dots_position = $dots_position;
      }
      return $cw_dots_position;
   }

   //Effect
   public function cw_effect($swiper_effect)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_effect')) {
                  $cw_effect = get_sub_field('cw_effect');
               }
            }
         } else {
            $cw_effect = NULL;
         }
      } else {
         $cw_effect = $swiper_effect;
      }
      return $cw_effect;
   }

   //Items
   public function cw_items($base_items)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items')) {
                  $cw_items = get_sub_field('cw_items');
               }
            }
         } else {
            $cw_items =  NULL;
         }
      } else {
         $cw_items =  $base_items;
      }
      return $cw_items;
   }

   //items_xs
   public function cw_items_xs($items_xs)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_xs')) {
                  $cw_items_xs = get_sub_field('cw_items_xs');
               }
            }
         } else {
            $cw_items_xs = NULL;
         }
      } else {
         $cw_items_xs = $items_xs;
      }
      return $cw_items_xs;
   }

   //items_sm
   public function cw_items_sm($items_sm)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_sm')) {
                  $cw_items_sm = get_sub_field('cw_items_sm');
               }
            }
         } else {
            $cw_items_sm = NULL;
         }
      } else {
         $cw_items_sm = $items_sm;
      }
      return $cw_items_sm;
   }

   //items_md
   public function cw_items_md($items_md)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_md')) {
                  $cw_items_md = get_sub_field('cw_items_md');
               } else {
                  $cw_items_md = $items_md;
               }
            }
         } else {
            $cw_items_md = NULL;
         }
      } else {
         $cw_items_md = $items_md;
      }
      return $cw_items_md;
   }

   //items_lg
   public function cw_items_lg($items_lg)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_lg')) {
                  $cw_items_lg = get_sub_field('cw_items_lg');
               } else {
                  $cw_items_lg = $items_lg;
               }
            }
         } else {
            $cw_items_lg = NULL;
         }
      } else {
         $cw_items_lg = $items_lg;
      }
      return $cw_items_lg;
   }

   //items_xl
   public function cw_items_xl($items_xl)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_xl')) {
                  $cw_items_xl = get_sub_field('cw_items_xl');
               } else {
                  $cw_items_xl = $items_xl;
               }
            }
         } else {
            $cw_items_xl = NULL;
         }
      } else {
         $cw_items_xl = $items_xl;
      }
      return $cw_items_xl;
   }

   //items_xxl
   public function cw_items_xxl($items_xxl)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_items_xxl')) {
                  $cw_items_xxl = get_sub_field('cw_items_xxl');
               } else {
                  $cw_items_xxl = $items_xxl;
               }
            }
         } else {
            $cw_items_xxl = NULL;
         }
      } else {
         $cw_items_xxl = $items_xxl;
      }
      return $cw_items_xxl;
   }

   //Autoplay
   public function cw_autoplay($autoplay)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_autoplay') == 1) {
                  $cw_autoplay = 'true';
               } else {
                  $cw_autoplay = 'false';
               }
            }
         } else {
            $cw_autoplay = NULL;
         }
      } else {
         $cw_autoplay = $autoplay;
      }
      return $cw_autoplay;
   }

   //Autoplay Time
   public function cw_autoplay_time($autoplay_time)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_autoplay_time') && get_sub_field('cw_autoplay') == 1) {
                  $cw_autoplay_time = get_sub_field('cw_autoplay_time');
               } else {
                  $cw_autoplay_time = NULL;
               }
            }
         } else {
            $cw_autoplay_time = NULL;
         }
      } else {
         $cw_autoplay_time = $autoplay_time;
      }
      return $cw_autoplay_time;
   }

   //Loop
   public function cw_loop($loop)
   {
      if ($this->custom_settings_bool == 'true') {
         if (have_rows('gallery')) {
            while (have_rows('gallery')) {
               the_row();
               if (get_sub_field('cw_loop') == 1) {
                  $cw_loop = 'true';
               } else {
                  $cw_loop = 'false';
               }
            }
         } else {
            $cw_loop = NULL;
         }
      } else {
         $cw_loop = $loop;
      }
      return $cw_loop;
   }

   //Data
   public function cw_data()
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
         $data_array[] = 'data-margin="' . $data_margin . '"';
      }


      if ($dots) {
         $data_array[] = 'data-dots="' . $dots . '"';
      }

      if ($nav) {
         $data_array[] = 'data-nav="' . $nav . '"';
      }
      if ($effect) {
         $data_array[] =  'data-effect="' . $effect . '"';
      }
      if ($items) {
         $data_array[] = 'data-items="' . $items . '"';
      }
      if ($items_xs) {
         $data_array[] = 'data-items-xs="' . $items_xs . '"';
      }
      if ($items_sm) {
         $data_array[] = 'data-items-sm="' . $items_sm . '"';
      }
      if ($items_md) {
         $data_array[] = 'data-items-md="' . $items_md . '"';
      }
      if ($items_lg) {
         $data_array[] = 'data-items-lg="' . $items_lg . '"';
      }
      if ($items_xl) {
         $data_array[] = 'data-items-xl="' . $items_xl . '"';
      }
      if ($items_xxl) {
         $data_array[] = 'data-items-xxl="' . $items_xxl . '"';
      }
      if ($autoplay) {
         $data_array[] = 'data-autoplay="' . $autoplay . '"';
      }
      if ($autoplay_time) {
         $data_array[] = 'data-autoplaytime="' . $autoplay_time . '"';
      }
      if ($loop) {
         $data_array[] = 'data-loop="' . $loop . '"';
      }
      $data_array[] = 'data-autoheight="false"';

      $cw_data = implode(' ', $data_array);
      return $cw_data;
   }

   //Class
   public function cw_class($swiper_container_class)
   {
      $class_array = array();
      $nav = $this->nav;
      $nav_color = $this->nav_color;
      $nav_position = $this->nav_position;
      $dots = $this->dots;
      $dots_color = $this->dots_color;
      $dots_position = $this->dots_position;

      if ($swiper_container_class !== NULL) {
         $class_array[] = $swiper_container_class;
      }
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


      $cw_class = implode(' ', $class_array);

      return $cw_class;
   }



   //Final Slider
   public function cw_final_slider($image_class, $image_pattern, $image_thumb_size, $image_big_size, $img_link, $wrapper_image_class, $image_demo, $label_demo, $label_pattern)
   {
      $count_image = $this->count_image;
      $final_slider = '';
      $data = $this->swiper_data;
      $class = $this->swiper_container_class;
      if ($this->image_shape !== NULL) {
         $image_shape = $this->image_shape;
      } else {
         $image_shape = NULL;
      }

      if ($count_image >= 2) {
         $final_slider .= '<div class="swiper-container ' . $class . '" ' . $data . '>
            <div class="swiper">
               <div class="swiper-wrapper">';
         if (have_rows('cw_images')) {
            while (have_rows('cw_images')) {
               the_row();

               $image_pattern = '<figure %5$s %9$s>%6$s<img %4$s src="%1$s" srcset="%1$s" %3$s />%7$s %10$s</figure>';

               $image = new CW_Image($image_thumb_size, $image_big_size, NULL, NULL, NULL, $image_shape, $image_class, NULL, NULL, $image_pattern, NULL);

               if ($image->image_clean_title) {
                  $caption_image = '<div class="caption-wrapper p-8"><div class="caption bg-white rounded px-4 py-3 mt-auto animate__animated animate__slideInDown animate__delay-1s"><div class="mb-0 h5">' . $image->image_clean_title . '</div></div><!--/.caption --></div><!--/.caption-wrapper -->';
               } else {
                  $caption_image = NULL;
               }
               $final_slider .= '<div class="swiper-slide">' . $image->final_image . $caption_image . '</div>';
            }
         }
         $final_slider .= '</div>';
         $final_slider .= '</div>';
         $label = new CW_Labels($label_pattern, $label_demo, NULL);
         $final_slider .= $label->final_labels;

         $final_slider .= '</div>';
      } elseif ($count_image == 1) {
         $label_object = new CW_Labels($label_pattern, $label_demo, NULL);
         $label = $label_object->final_labels;

         if (have_rows('cw_images')) {
            while (have_rows('cw_images')) {
               the_row();
               $image = new CW_Image($image_thumb_size, $image_big_size, NULL, $img_link, NULL, $image_shape, NULL, $wrapper_image_class, $image_demo, NULL, $label);

               $final_slider = $image->final_image;
            }
         }
      } elseif ($count_image == 0 && $image_pattern !== NULL) {
         $final_slider = $image_demo;
      } else {
         $final_slider = NULL;
      }


      return $final_slider;
   }
}
