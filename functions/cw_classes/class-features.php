<?php

//* ---Features Class ACF---

class CW_Feature
{
   public $features_icon;
   public $features_title;
   public $features_paragraph;
   public $features_link;
   public $features_pattern;
   public $features_item_final;
   public $features_list_final;

   public function __construct($features_icon, $features_title, $features_paragraph, $features_link, $features_pattern, $demo)
   {
      $this->features_icon = $this->cw_features_icon($features_icon);
      $this->features_title = $this->cw_features_title($features_title);
      $this->features_paragraph = $this->cw_features_paragraph($features_paragraph);
      $this->features_link = $this->cw_features_link($features_link);
      $this->features_item_final = $this->cw_features_item_final($features_pattern, $features_title, $demo);
   }

   //Features_icon
   public function cw_features_icon($features_icon)
   {
      if (have_rows('cw_features_item')) :
         while (have_rows('cw_features_item')) : the_row();
            $features_icon_object = new CW_Icon();
            $features_icon =  $features_icon_object->final_icon;
         endwhile;
      else :
         $features_icon = NULL;
      endif;
      return $features_icon;
   }

   //Features_title
   public function cw_features_title($features_title)
   {
      if (have_rows('cw_features_item')) :
         while (have_rows('cw_features_item')) : the_row();
            $features_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $features_title =  $features_object->title_text;
         endwhile;
      else :
         $features_title = NULL;
      endif;
      return $features_title;
   }

   //Features_title
   public function cw_features_paragraph($features_paragraph)
   {
      if (have_rows('cw_features_item')) :
         while (have_rows('cw_features_item')) : the_row();
            $features_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
            $features_paragraph =  $features_object->paragraph_text;
         endwhile;
      else :
         $features_paragraph = NULL;
      endif;
      return $features_paragraph;
   }

   //Features_link
   public function cw_features_link($features_link)
   {
      if (have_rows('cw_features_item')) :
         while (have_rows('cw_features_item')) : the_row();
            $features_link_object =  new CW_Buttons($buttons_pattern = NULL, $buttons_items = NULL);
            $features_link = $features_link_object->final_buttons;
         endwhile;
      else :
         $features_link = NULL;
      endif;
      return $features_link;
   }

   //Features_item
   public function cw_features_item_final($features_pattern, $features_title, $demo)
   {
      $link = $this->features_link;
      $title = $this->features_title;
      $paragraph = $this->features_paragraph;
      $icon = $this->features_icon;

      if (have_rows('cw_features_item')) :
         while (have_rows('cw_features_item')) : the_row();
            if (!$title && !$paragraph && !$icon) {
               $features_item = $demo;
            } else {
               $features_item_pattern = $features_pattern;
               $features_item = sprintf($features_item_pattern, NULL, $icon, $title, $paragraph, $link);
            }
         endwhile;
      else :
         $features_item = NULL;
      endif;
      return $features_item;
   }
}



//* ---Features Class ACF---

class CW_Features
{
   public $features_list_final;
   public function __construct($features_pattern, $demo)
   {
      $this->features_list_final = $this->cw_features_list_final($features_pattern, $demo);
   }

   //Features_list
   public function cw_features_list_final($features_pattern, $demo)
   {
      if (have_rows('cw_features')) {
         $cw_features_list = '';
         while (have_rows('cw_features')) : the_row();
            $features_item = new CW_Feature(
               NULL,
               NULL,
               NULL,
               NULL,
               $features_pattern,
               $demo
            );
            $cw_features_list .= $features_item->features_item_final;
         endwhile;
      } else {
         $cw_features_list = NULL;
      }
      return $cw_features_list;
   }
}
