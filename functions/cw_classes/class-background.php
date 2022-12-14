<?php

//* ---Background Class ACF---

class CW_Background
{
   public $size_background;




   // public $count = NULL;
   // public $class_button_wrapper = "d-flex justify-content-start flex-wrap";
   // public $default_button;
   // public $data_cues = "slideInDown";
   // public $data_group = "page-title-buttons";
   // public $data_delay = "900";
   // public $animate_swiper = 'false';
   // public $animate_swiper_class = NULL;

   public function __construct()
   {
      $this->size_background = $this->cw_size_background();
   }

   //Size

   public function cw_size_background()
   {
      if (have_rows('cw_background')) :
         while (have_rows('cw_background')) : the_row();
            $cw_image_background = get_sub_field('cw_image_background');
            if ($cw_image_background) :

            endif;
            the_sub_field('cw_background_size');
            the_sub_field('cw_background_overlay');
            if (have_rows('color')) :
               while (have_rows('color')) : the_row();
                  the_sub_field('select_type_color');
                  the_sub_field('select_solid_color');
                  the_sub_field('gradient_color');
               endwhile;
            endif;
         endwhile;
      endif;
      $size_background = 'ttt';
      return $size_background;
   }


   //Color


   //Final Button

}
