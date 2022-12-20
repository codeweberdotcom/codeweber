<?php

//* ---Icon Class ACF---

class CW_Divider
{
   public $type_divider;
   public $class_divider;
   public $div_wave;
   public $div_border;


   public function __construct()
   {
      $this->type_divider = $this->cw_type_divider();
      $this->class_divider = $this->cw_class_divider();
      $this->div_wave = $this->cw_div_wave();
      $this->div_border = $this->cw_div_border();
   }

   //Type_divider
   public function cw_type_divider()
   {
      if (have_rows('cw_divider')) :
         while (have_rows('cw_divider')) : the_row();
            $type_divider = get_sub_field('cw_start_divider_type');
         endwhile;
      else :
         $type_divider = NULL;
      endif;
      return $type_divider;
   }

   //Class_divider
   public function cw_class_divider()
   {
      $type_divider = $this->type_divider;
      if (have_rows('cw_divider') && $type_divider == 'angle' && $type_divider !== 'none') :
         while (have_rows('cw_divider')) : the_row();
            $class_divider = 'wrapper angled ' . get_sub_field('cw_start_angle');
         endwhile;
      else :
         $class_divider = NULL;
      endif;
      return $class_divider;
   }

   //Div_wave
   public function cw_div_wave()
   {
      $type_divider = $this->type_divider;
      if (have_rows('cw_divider') && $type_divider == 'wave' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) : the_row();
            $type_wave = get_sub_field('cw_start_wave');
            $div_wave = '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider text-white mx-n2">';
            if ($type_wave == 'wave_1') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70"><path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"/></svg>';
            } elseif ($type_wave == 'wave_2') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg>';
            } elseif ($type_wave == 'wave_3') {
               $div_wave .= ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 92.26"><path fill="currentColor" d="M1206,21.2c-60-5-119-36.92-291-5C772,51.11,768,48.42,708,43.13c-60-5.68-108-29.92-168-30.22-60,.3-147,27.93-207,28.23-60-.3-122-25.94-182-36.91S30,5.93,0,16.2V92.26H1440v-87l-30,5.29C1348.94,22.29,1266,26.19,1206,21.2Z"/></svg>';
            } elseif ($type_wave == 'wave_4') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"/></svg>';
            } elseif ($type_wave == 'wave_5') {
               $div_wave .= ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260.2,37.86c-60-10-120-20.07-180-16.76-60,3.71-120,19.77-180,18.47-60-1.71-120-21.78-180-31.82s-120-10-180-1.7c-60,8.73-120,24.79-180,28.5-60,3.31-120-6.73-180-11.74s-120-5-150-5H0V100H1440V49.63C1380.07,57.9,1320.13,47.88,1260.2,37.86Z"/></svg>';
            } else {
               $div_wave = NULL;
            };
            $div_wave .= '</div></div><!-- /.overflow-hidden -->';
         endwhile;
      } else {
         $div_wave = NULL;
      }
      return $div_wave;
   }


   //Div_border
   public function cw_div_border()
   {
      $type_divider = $this->type_divider;

      if (have_rows('cw_divider') && $type_divider == 'border' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) : the_row();
            $type_border = get_sub_field('cw_border');
            if ($type_border == 'simple') {
               $div_border = '<!-- Simple --><hr class="my-8" />';
            } elseif ($type_border == 'double') {
               $div_border = '<!-- Double --><hr class="double my-8" />';
            } elseif ($type_border == 'icon') {
               $div_border = '<!-- Icon --><div class="divider-icon my-8">' . get_sub_field('border_icon') . '</i></div>';
            } else {
               $div_border = NULL;
            }
         endwhile;
         return $div_border;
      }
   }
}
