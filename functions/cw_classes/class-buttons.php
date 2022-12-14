<?php

//* ---Buttons Class ACF---

class CW_Button
{
   public $text_button;
   public $contact_form_id;
   public $shape_button;
   public $size_button;
   public $type_button;
   public $color_button;
   public $class_button;
   public $import_class;
   public $icon_button;
   public $id_button;
   public $button_link = '#';
   public $button_bs_target;
   public $target_link;
   public $ghligthbox;

   public $final_button;

   // public $count = NULL;
   // public $class_button_wrapper = "d-flex justify-content-start flex-wrap";
   // public $default_button;
   // public $data_cues = "slideInDown";
   // public $data_group = "page-title-buttons";
   // public $data_delay = "900";
   // public $animate_swiper = 'false';
   // public $animate_swiper_class = NULL;

   public function __construct($import_class = NULL)
   {
      $this->text_button = $this->cw_text_button();
      $this->link_button = $this->cw_link_button();
      $this->icon_button = $this->cw_icon_button();
      $this->shape_button = $this->cw_shape_button();
      $this->class_button = $this->cw_class_button();
      $this->import_class = $import_class;
      $this->id_button = $this->cw_id_button();
      $this->size_button = $this->cw_size_button();
      $this->color_button = $this->cw_color_button();
      $this->type_button = $this->cw_type_button();
      $this->final_button = $this->cw_final_button($import_class);
   }

   //Icon 
   public function cw_icon_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            $button_icon = get_sub_field('cw_unicons');
         endwhile;
      endif;
      return $button_icon;
   }

   //Link
   public function cw_link_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (have_rows('cw_links')) :
               while (have_rows('cw_links')) : the_row();
                  $link_type = get_sub_field('cw_link_type');
                  $this->ghligthbox = NULL;
                  $this->target_link = NULL;
                  if ($link_type == 'URL') {
                     $cw_url = get_sub_field('cw_url');
                     if ($cw_url) :
                        $this->button_link = esc_url($cw_url['url']);
                        $button_link = esc_url($cw_url['url']);
                        $this->target_link = 'target="' . esc_attr($cw_url['target']) . '"';
                     endif;
                  } elseif ($link_type == 'Video URL') {
                     $cw_video_url = get_sub_field('cw_video_url');
                     if ($cw_video_url) :
                        $this->button_link = $cw_video_url;
                        $button_link = $cw_video_url;
                        $this->ghligthbox = 'data-glightbox';
                     endif;
                  } elseif ($link_type == 'Form') {
                     $cw_contact_form = get_sub_field('cw_contact_form');
                     if ($cw_contact_form) :
                        $this->contact_form_id = $cw_contact_form;
                        $cf7_id = $cw_contact_form;
                        $this->button_bs_target = 'data-bs-toggle="modal" data-bs-target="#modal-form-' . $cf7_id . '"';
                        global $forms;
                        if (is_array($forms)) :
                           array_push($forms, $cf7_id);
                        endif;
                     endif;
                  } else {
                     $this->button_bs_target = '#';
                     $button_link = $this->button_link;
                  }
               endwhile;
            endif;
            $button_link  = get_sub_field('cw_unicons');
         endwhile;
      endif;
      return $button_link;
   }

   //Type
   public function cw_type_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            $button_type = get_sub_field('cw_button_type');
         endwhile;
      endif;
      return $button_type;
   }

   // Text
   public function cw_text_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (get_sub_field('cw_button_text')) {
               $text_button = get_sub_field('cw_button_text');
            } else {
               $text_button = 'Button';
            }
         endwhile;
      endif;
      return $text_button;
   }

   //Class
   public function cw_class_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (get_sub_field('cw_class')) {
               $class_button = get_sub_field('cw_class');
            } else {
               $class_button = '';
            }
         endwhile;
      endif;
      return $class_button;
   }

   //ID
   public function cw_id_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (get_sub_field('cw_id')) {
               $id_button = 'id="' . get_sub_field('cw_id') . '"';
            } else {
               $id_button = '';
            }
         endwhile;
      endif;
      return $id_button;
   }

   //Shape
   public function cw_shape_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (get_sub_field('cw_shape_button') == 'Square') {
               $shape_button = 'rounded-0';
            } elseif (get_sub_field('cw_shape_button') == 'Pill') {
               $shape_button = 'rounded-pill';
            } elseif (get_sub_field('cw_shape_button') == 'Rounded') {
               $shape_button = '';
            } elseif (get_sub_field('cw_shape_button') == 'Theme') {
               $shape_button = '';
            }
         endwhile;
      endif;
      return $shape_button;
   }

   //Size
   public function cw_size_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            if (get_sub_field('button_size') == 'Lg') {
               $size_button = 'btn-lg';
            } elseif (get_sub_field('button_size') == 'Sm') {
               $size_button = 'btn-sm';
            } elseif (get_sub_field('button_size') == 'Default') {
               $size_button = '';
            } elseif (get_sub_field('button_size') == 'Theme') {
               $size_button = get_theme_mod('codeweber_button_size');
            }
         endwhile;
      endif;
      return $size_button;
   }

   //Color
   public function cw_color_button()
   {
      if (have_rows('cw_buttons')) :
         while (have_rows('cw_buttons')) : the_row();
            $color = new CW_Color;
            if ($color->color == 'none') {
               $color_button = '';
            } elseif (get_sub_field('button_style') == 'Outline') {
               $color_button = 'btn-outline-' . $color->color;
            } else {
               $color_button = 'btn-' . $color->color;
            }
         endwhile;
      endif;
      return $color_button;
   }



   //Final Button
   public function cw_final_button()
   {
      $type_button =  $this->type_button;
      $button_id = $this->id_button;

      if ($type_button == 'Theme') {
         $icon_button = '';
         $button_classes_array = array();
         $button_classes_array[] = 'btn';
         $button_classes_array[] = $this->shape_button;
         $button_classes_array[] = $this->size_button;
         $button_classes_array[] = $this->color_button;
         $button_classes_array[] = $this->class_button;
         $button_classes_array[] = $this->import_class;
         $button_classes = implode(' ', $button_classes_array);
         $final_button = '<a href="' . $this->button_link . '" class="' . $button_classes . '"' .  $button_id . ' ' . $this->ghligthbox . ' ' . $this->button_bs_target . '>' . $icon_button . $this->text_button . '</a>';
      } elseif ($type_button == 'Icon') {
         $button_classes_array = array();
         $button_classes_array[] = 'btn';
         $button_classes_array[] = $this->shape_button;
         $button_classes_array[] = $this->size_button;
         $button_classes_array[] = $this->color_button;
         $button_classes_array[] = $this->class_button;
         $button_classes_array[] = $this->import_class;
         $button_classes_array[] = 'btn-icon btn-icon-start';
         $icon_button = $this->icon_button;
         $button_classes = implode(' ', $button_classes_array);
         $final_button = '<a href="' . $this->button_link . '" class="' . $button_classes . '"' .  $button_id . ' ' . $this->ghligthbox . ' ' . $this->button_bs_target . '>' . $icon_button . $this->text_button . '</a>';
      } elseif ($type_button == 'Expand') {
         $button_classes_array = array();
         $button_classes_array[] = 'btn';
         $button_classes_array[] = $this->color_button;
         $button_classes_array[] = $this->class_button;
         $button_classes_array[] = $this->import_class;
         $button_classes_array[] = 'btn-expand rounded-pill';
         $icon_button = $this->icon_button;
         $button_classes = implode(' ', $button_classes_array);
         $final_button = '<a href="' . $this->button_link . '" class="' . $button_classes . '"' .  $button_id . ' ' . $this->ghligthbox . ' ' . $this->button_bs_target . '><i class="uil uil-arrow-right"></i><span>' . $this->text_button . '</span></a>';
      } elseif ($type_button == 'Play') {
         $button_classes_array = array();
         $button_classes_array[] = 'btn';
         $button_classes_array[] = $this->color_button;
         $button_classes_array[] = $this->class_button;
         $button_classes_array[] = $this->import_class;
         $button_classes_array[] = 'btn-circle btn-play ripple';
         $button_classes = implode(' ', $button_classes_array);
         $final_button = '<a href="' . $this->button_link . '" class="' . $button_classes . '"' .  $button_id . ' ' . $this->ghligthbox . ' ' . $this->button_bs_target . '><i class="icn-caret-right"></i></a>';
      } elseif ($type_button == 'Circle') {
         $button_classes_array = array();
         $button_classes_array[] = 'btn';
         $button_classes_array[] = $this->size_button;
         $button_classes_array[] = $this->color_button;
         $button_classes_array[] = $this->class_button;
         $button_classes_array[] = $this->import_class;
         $button_classes_array[] = 'btn-circle';
         $button_classes = implode(' ', $button_classes_array);
         $final_button = '<a href="' . $this->button_link . '" class="' . $button_classes . '"' .  $button_id . ' ' . $this->ghligthbox . ' ' . $this->button_bs_target . '><span><i class="uil uil-check"></i></span></a>';
      }
      return $final_button;
   }
}





class CW_Buttons
{
   public $final_buttons;
   public $buttons_pattern;
   public $buttons_items;


   public function __construct($buttons_pattern = NULL, $buttons_items = NULL)
   {
      $this->final_buttons = $this->cw_final_buttons($buttons_pattern, $buttons_items);
   }
   public function cw_final_buttons($buttons_pattern, $buttons_items)
   {
      $buttons_array = array();
      if (is_array(get_sub_field('cw_buttons_repeater'))) {
         $count = count(get_sub_field('cw_buttons_repeater'));
      }


      if (have_rows('cw_buttons_repeater')) :
         while (have_rows('cw_buttons_repeater')) : the_row();
            if ($count == 1) {
               $button = new CW_Button();
               $buttons_array[] = '<div>' . $button->final_button . '</div>';
            } else {
               $button = new CW_Button($import_class = 'me-2');
               $buttons_array[] = '<span>' . $button->final_button . '</span>';
            }
         endwhile;
         $buttons_list = implode('', $buttons_array);
      else :
         $buttons_list = $buttons_items;
      endif;



      if ($count >=  2) {
         $buttons_final = sprintf($buttons_pattern, $buttons_list);
      } else {
         $buttons_final = $buttons_list;
      }







      return $buttons_final;
   }
}
