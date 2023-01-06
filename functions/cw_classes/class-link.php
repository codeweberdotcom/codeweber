<?php

//* ---Link---

class CW_Link
{
   public $link_type;
   public $link_url;
   public $link_glightbox;

   public $link_url_target;
   public $link_url_title;

   public $link_form;


   public function __construct($link_type, $link_url, $form)
   {
      $this->link_type = $this->cw_link_type($link_type);
      $this->link_url = $this->cw_link_url($link_url);
      $this->link_form = $this->cw_form($form);
   }

   //Link_type
   public function cw_link_type($link_type)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) : the_row();
            $cw_link_type = get_sub_field('cw_link_type');
         endwhile;
      } elseif ($link_type !== NULL) {
         $cw_link_type = $link_type;
      } else {
         $cw_link_type = NULL;
      }
      return $cw_link_type;
   }

   //Link_url
   public function cw_link_url($link_url)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            $cw_url = get_sub_field('cw_url');
            if ($cw_url && $this->link_type == 'URL') {
               $cw_link_url =  'href="' . esc_url($cw_url['url']) . '"';
               $this->link_url_target = 'target="' . esc_attr($cw_url['target']) . '"';
               $this->link_url_title = 'title="' . esc_html($cw_url['title']) . '"';
            } elseif ($cw_url && $this->link_type == 'Video URL') {
               $cw_link_url =  'href="' . esc_url($cw_url['url']) . '"';
               $this->link_glightbox = 'data-glightbox';
            } else {
               $cw_link_url = 'href="#"';
            }
         }
      } elseif ($link_url !== NULL) {
         $cw_link_url = $link_url;
      } else {
         $cw_link_url = 'href="#"';
      }
      return $cw_link_url;
   }

   //Form
   public function cw_form($form)
   {
      if (have_rows('cw_links')) {
         while (have_rows('cw_links')) {
            the_row();
            $cw_contact_form = get_sub_field('cw_contact_form');
            if ($cw_contact_form) {
               $form = 'data-bs-toggle="modal" data-bs-target="#modal-form-' . $cw_contact_form . '"';
               global $forms;
               if (is_array($forms)) {
                  array_push($forms, $cw_contact_form);
               }
            } else {
               $form = NULL;
            }
         }
      } else {
         $form = NULL;
      }
      return $form;
   }
}
