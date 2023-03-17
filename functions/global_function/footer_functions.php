<?php

function cta_footer_button()
{
   if (have_rows('', 'option')) {
      while (have_rows('', 'option')) {
         the_row();
         $button_object = new CW_Buttons(NULL, NULL, NULL, NULL);
         echo $button_object->final_buttons;
      }
   }
}

function cta_footer_text()
{
   if (have_rows('', 'option')) {
      while (have_rows('', 'option')) {
         the_row();
         the_sub_field('cta_text');
      }
   }
}
