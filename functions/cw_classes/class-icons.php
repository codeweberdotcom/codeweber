<?php

//* ---Icon Class ACF---

class CW_Icon
{
   public $type_icon;
   public $form_icon;
   public $class;
   public $size_icon;
   public $unicons_icon;
   public $lineal_icon;
   public $color_icon;
   public $number_icon;
   public $class_icon;
   public $id_icon;
   public $final_icon;

   public function __construct()
   {
      $this->class_icon = $this->cw_class_icon();
      $this->id_icon = 'id="' . $this->cw_id_icon() . '"';
      $this->type_icon = $this->cw_type_icon();
      $this->color_icon = $this->cw_color_icon();
      $this->form_icon = $this->cw_form_icon();
      $this->size_icon = $this->cw_size_icon();
      $this->unicons_icon = $this->cw_unicons_icon();
      $this->lineal_icon = $this->cw_lineal_icon();
      $this->number_icon = $this->cw_number_icon();
      $this->final_icon = $this->cw_final_icon();
   }

   // Type
   public function cw_type_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $type_icon = get_sub_field('cw_type_icon');
         endwhile;
      endif;
      return $type_icon;
   }

   // Class
   public function cw_class_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $class_icon = get_sub_field('cw_class');
         endwhile;
      endif;
      return $class_icon;
   }

   // ID
   public function cw_id_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $id_icon = get_sub_field('cw_id');
         endwhile;
      endif;
      return $id_icon;
   }

   //Color
   public function cw_color_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $color = new CW_Color;
            if ($color->color == 'none') {
               $color_icon = '';
            } else {
               $color_icon = $color->color;
            }
         endwhile;
      endif;
      return $color_icon;
   }

   //Form
   public function cw_form_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $form_icon = get_sub_field('cw_icon_form');
         endwhile;
      endif;
      return $form_icon;
   }


   //Size
   public function cw_size_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $size_icon = get_sub_field('cw_icon_size');
         endwhile;
      endif;
      return $size_icon;
   }


   //Unicons
   public function cw_unicons_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $unicons_icon = get_sub_field('cw_unicons');
         endwhile;
      endif;
      return $unicons_icon;
   }


   //Lineal
   public function cw_lineal_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
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
         endwhile;
      endif;
      return $lineal_icon;
   }

   //Number
   public function cw_number_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
            $number_icon = get_sub_field('cw_number');
         endwhile;
      endif;
      return $number_icon;
   }

   //Final Icon
   public function cw_final_icon()
   {
      if (have_rows('cw_icons')) :
         while (have_rows('cw_icons')) : the_row();
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
            }
         endwhile;
      endif;
      return $final_icon;
   }
}
