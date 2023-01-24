<?php

//* ---Icon Class ACF---

class CW_Divider
{
   public $type_divider;
   public $class_divider;
   public $div_wave;
   public $div_border;
   public $div_color;


   public function __construct($type_divider, $class_divider, $div_wave, $div_color, $div_border)
   {
      $this->type_divider = $this->cw_type_divider($type_divider);
      $this->div_color = $this->cw_div_color($div_color);
      $this->class_divider = $this->cw_class_divider($class_divider);
      $this->div_wave = $this->cw_div_wave($div_wave);
      $this->div_border = $this->cw_div_border($div_border);
   }

   //Type_divider
   public function cw_type_divider($type_divider)
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

   //Color_divider
   public function cw_div_color($div_color)
   {
      if (have_rows('cw_divider')) :
         while (have_rows('cw_divider')) : the_row();
            $cw_div_color_object = new CW_Color(NULL, NULL);
            $cw_div_color = $cw_div_color_object->color;
            if ($cw_div_color == 'none') {
               $cw_div_color = $div_color;
            }
         endwhile;
      else :
         $cw_div_color = NULL;
      endif;


      return $cw_div_color;
   }

   //Class_divider
   public function cw_class_divider($class_divider)
   {
      $type_divider = $this->type_divider;
      if (have_rows('cw_divider') && $type_divider == 'angle' && $type_divider !== 'none') :
         while (have_rows('cw_divider')) : the_row();
            $cw_class_divider = 'wrapper angled ' . get_sub_field('cw_start_angle');
         endwhile;
      else :
         $cw_class_divider = 'wrapper angled ' . $class_divider;
      endif;
      return $cw_class_divider;
   }

   //Div_wave
   public function cw_div_wave($div_wave)
   {
      $type_divider = $this->type_divider;
      $color = 'text-' . $this->div_color;
      if (have_rows('cw_divider') && $type_divider == 'wave' && $type_divider !== 'none') {
         while (have_rows('cw_divider')) : the_row();
            $type_wave = get_sub_field('cw_start_wave');
            $div_wave = '<!-- Wave 2 --><div class="overflow-hidden"><div class="divider ' . $color . ' mx-n2">';
            if ($type_wave == 'wave_1') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 70"><path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"/></svg>';
            } elseif ($type_wave == 'wave_2') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 60"><path fill="currentColor" d="M0,0V60H1440V0A5771,5771,0,0,1,0,0Z"/></svg>';
            } elseif ($type_wave == 'wave_3') {
               $div_wave .= ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 92.26"><path fill="currentColor" d="M1206,21.2c-60-5-119-36.92-291-5C772,51.11,768,48.42,708,43.13c-60-5.68-108-29.92-168-30.22-60,.3-147,27.93-207,28.23-60-.3-122-25.94-182-36.91S30,5.93,0,16.2V92.26H1440v-87l-30,5.29C1348.94,22.29,1266,26.19,1206,21.2Z"/></svg>';
            } elseif ($type_wave == 'wave_4') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260,1.65c-60-5.07-119.82,2.47-179.83,10.13s-120,11.48-180,9.57-120-7.66-180-6.42c-60,1.63-120,11.21-180,16a1129.52,1129.52,0,0,1-180,0c-60-4.78-120-14.36-180-19.14S60,7,30,7H0v93H1440V30.89C1380.07,23.2,1319.93,6.15,1260,1.65Z"/></svg>';
            } elseif ($type_wave == 'wave_5') {
               $div_wave .= '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"><path fill="currentColor" d="M1260.2,37.86c-60-10-120-20.07-180-16.76-60,3.71-120,19.77-180,18.47-60-1.71-120-21.78-180-31.82s-120-10-180-1.7c-60,8.73-120,24.79-180,28.5-60,3.31-120-6.73-180-11.74s-120-5-150-5H0V100H1440V49.63C1380.07,57.9,1320.13,47.88,1260.2,37.86Z"/></svg>';
            } elseif ($type_wave == 'wave_6') {
               $div_wave .= '<svg viewBox="0 0 1440 100" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M364.5 84.0006C588 82.5 1207.5 -79.9999 1440 52.6209V102.991H0V20.8009C0 20.8009 141 85.5013 364.5 84.0006Z"/></svg>';
            } elseif ($type_wave == 'wave_7') {
               $div_wave .= '<svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none"><path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"></path></svg>';
            } elseif ($type_wave == 'wave_8') {
               $div_wave .= '<svg class="editorial"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 "preserveAspectRatio="none"><defs><path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" /></defs><g class="parallax1"><use xlink:href="#gentle-wave" x="50" y="3" fill="#f461c1"/></g><g class="parallax2"><use xlink:href="#gentle-wave" x="50" y="0" fill="#4579e2"/></g><g class="parallax3"><use xlink:href="#gentle-wave" x="50" y="9" fill="#3461c1"/></g><g class="parallax4"><use xlink:href="#gentle-wave" x="50" y="6" fill="#fff"/> </g></svg><style>.parallax1 > use {
  animation: move-forever1 10s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax2 > use {
  animation: move-forever2 8s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax3 > use {
  animation: move-forever3 6s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
.parallax4 > use {
  animation: move-forever4 4s linear infinite;
  &:nth-child(1) {
    animation-delay: -2s;
  }
}
@keyframes move-forever1 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}
@keyframes move-forever2 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}
@keyframes move-forever3 {
  0% {
    transform: translate(85px, 0%);
  }
  100% {
    transform: translate(-90px, 0%);
  }
}
@keyframes move-forever4 {
  0% {
    transform: translate(-90px, 0%);
  }
  100% {
    transform: translate(85px, 0%);
  }
}</style>';
            };
            $div_wave .= '</div></div><!-- /.overflow-hidden -->';

            $this->class_divider = NULL;
         endwhile;
      } else {
         $div_wave = $div_wave;
      }
      return $div_wave;
   }


   //Div_border
   public function cw_div_border($div_border)
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
