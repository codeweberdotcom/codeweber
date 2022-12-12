<?php

//* ---Typography Class ACF---

class CW_Color
{
   public $color;

   public function __construct()
   {
      $this->color = $this->cw_color();
   }

   public function cw_color()
   {
      if (have_rows('color')) :
         while (have_rows('color')) : the_row();
            $type_color = get_sub_field('select_type_color');
            if ($type_color == 'Solid') :
               $color = get_sub_field('select_solid_color');
            elseif ($type_color == 'Soft') :
               $color = 'soft-' . get_sub_field('select_solid_color');
            //$this->base_color_icon = get_sub_field('select_solid_color'); 
            elseif ($type_color == 'Pale') :
               $color = 'pale-' . get_sub_field('select_solid_color');
            elseif ($type_color == 'Gradient') :
               $color =  'gradient ' . get_sub_field('gradient_color');
            elseif ($type_color == 'None') :
               $color = 'none';
            endif;
         endwhile;
      endif;
      $this->color = $color;
      return $this->color;
   }
}
