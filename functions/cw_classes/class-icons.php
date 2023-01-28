<?php

//* ---Icon Class ACF---

class CW_Icon
{
   public $type_icon;
   public $form_icon;
   // public $class;
   public $size_icon;
   public $unicons_icon;
   public $lineal_icon;
   public $image_icon;
   public $color_icon;
   public $number_icon;
   public $class_icon;
   public $id_icon;
   public $final_icon;

   public function __construct($type_icon, $form_icon, $class_image, $size_icon, $unicons_icon, $lineal_icon, $image_icon, $color_icon, $number_icon, $class_icon, $id_icon, $final_icon)

   {
      $this->class_icon = $this->cw_class_icon($class_icon, $class_image);
      $this->id_icon = $this->cw_id_icon();
      $this->type_icon = $this->cw_type_icon($type_icon);
      $this->color_icon = $this->cw_color_icon($color_icon);
      $this->form_icon = $this->cw_form_icon($form_icon);
      $this->size_icon = $this->cw_size_icon($size_icon);
      $this->unicons_icon = $this->cw_unicons_icon($unicons_icon, $class_image);
      $this->image_icon = $this->cw_image_icon($image_icon, $class_image);
      $this->lineal_icon = $this->cw_lineal_icon($lineal_icon, $class_image);
      $this->number_icon = $this->cw_number_icon($number_icon, $class_image);
      $this->final_icon = $this->cw_final_icon($final_icon, $class_image);
   }

   // Type
   public function cw_type_icon($type_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $type_icon = get_sub_field('cw_type_icon');
         }
      }
      return $type_icon;
   }

   // Class
   public function cw_class_icon($class_icon, $class_image)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $class_icon = get_sub_field('cw_class');
            if ($class_image !== NULL) {
               $class_icon .= $class_image;
            }
         }
      }
      return $class_icon;
   }

   // ID
   public function cw_id_icon()
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_id')) {
               $id_icon = 'id="' . get_sub_field('cw_id') . '"';
            } else {
               $id_icon = NULL;
            }
         }
      }
      return $id_icon;
   }

   //Color
   public function cw_color_icon($color_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $color = new CW_Color(NULL, NULL);
            if ($color->color == 'none') {
               $color_icon = '';
            } else {
               $color_icon = $color->color;
            }
         }
      }
      return $color_icon;
   }

   //Form
   public function cw_form_icon($form_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $form_icon = get_sub_field('cw_icon_form');
         }
      }
      return $form_icon;
   }


   //Size
   public function cw_size_icon($size_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $size_icon = get_sub_field('cw_icon_size');
         }
      }
      return $size_icon;
   }

   // Image
   public function cw_image_icon($image_icon, $class_image)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_image')) {
               $image = get_sub_field('cw_image');
               $form = $this->form_icon;
               $size = $this->size_icon;
               $class = array();
               $class[] = $this->class_icon;
               if ($form == 'btn-circle')
                  $class[] = 'rounded-pill';
               elseif ($form == 'btn-block') {
                  $class[] = 'rounded';
               } else {
                  $class[] = NULL;
               }

               if ($size == 'sm') {
                  $size = 'cw_icon_sm';
                  $class[] = 'w-10';
               } elseif ($size == 'md') {
                  $size = 'cw_icon_md';
                  $class[] = 'w-12';
               } elseif ($size == 'lg') {
                  $size = 'cw_icon_lg';
                  $class[] = 'w-15';
               }
               $class = 'class="' . implode(' ', $class) . '"';
               $image_icon = '<img ' . $class . ' src="' . $image['sizes'][$size] . '"/>';
            } else {
               $image_icon = NULL;
            }
         }
      } else {
         $image_icon = 'NULL';
      }
      return $image_icon;
   }

   //Unicons
   public function cw_unicons_icon($unicons_icon, $class_image)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $unicons_icon = get_sub_field('cw_unicons');
         }
      }
      return $unicons_icon;
   }


   //Lineal
   public function cw_lineal_icon($lineal_icon, $class_image)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_icon_size')) {
               $classes_icon = array();
               $classes_icon[] = 'icon-svg-' . $this->size_icon;
               $classes_icon[] = 'text-' . $this->color_icon;
               $classes_icon[] = 'svg-inject icon-svg';
               $classes_icon[] = $this->class_icon;
               $classes = 'class="' . implode(' ', $classes_icon) . '"';
            }
            if (get_sub_field('cw_lineal_svg')) {
               $lineal_icon =  '<img ' . $classes . ' src="' . get_stylesheet_directory_uri() . '/dist/img/icons/lineal/' . get_sub_field('cw_lineal_svg') . '.svg" ' . $this->id_icon . '/>';
            } else {
               $lineal_icon = '';
            }
         }
      }
      return $lineal_icon;
   }

   //Number
   public function cw_number_icon($number_icon)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            $number_icon = get_sub_field('cw_number');
         }
      }
      return $number_icon;
   }

   //Final Icon
   public function cw_final_icon($final_icon, $class_image)
   {
      if (have_rows('cw_icons')) {
         while (have_rows('cw_icons')) {
            the_row();
            if (get_sub_field('cw_type_icon') == 'Unicons' && get_sub_field('cw_type_icon') !== 'None') {
               if ($this->form_icon !== 'none') {
                  $final_icon = '<div class="icon btn ' . $this->form_icon . ' btn-' . $this->size_icon . ' btn-' . $this->color_icon . ' ' . $this->class_icon . '" ' . $this->id_icon . '>' . $this->unicons_icon . '</div>';
               } else {
                  $final_icon = $this->unicons_icon;
               }
            } elseif (get_sub_field('cw_type_icon') == 'SVG' && get_sub_field('cw_type_icon') !== 'None') {
               $final_icon =  $this->lineal_icon;
            } elseif (get_sub_field('cw_type_icon') == 'Number' && get_sub_field('cw_type_icon') !== 'None') {
               if ($this->form_icon !== 'none') {
                  $final_icon =  '<div class="icon btn ' . $this->form_icon . ' btn-' . $this->size_icon . ' btn-' . $this->color_icon . ' ' . $this->class_icon . '" ' . $this->id_icon . '>' . $this->number_icon . '</div>';
               } else {
                  $final_icon =  '<div class="icon btn btn-circle btn-' . $this->size_icon . ' btn-' . $this->color_icon . '" ' . $this->id_icon . '>' . $this->number_icon . '</div>';
               }
            } elseif (get_sub_field('cw_type_icon') == 'Image' && get_sub_field('cw_type_icon') !== 'None') {
               $final_icon =  $this->image_icon;
            } else {
               $final_icon = NULL;
            }
         }
      } else {
         $final_icon = NULL;
      }
      return $final_icon;
   }
}
