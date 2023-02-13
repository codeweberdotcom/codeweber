<?php

//* ---Tabs --

class CW_Tab
{
   public $root_theme;
   public $tab_final;
   public $type_tab;
   public $tab_icon;
   public $tab_title;
   public $tab_description;
   public $tab_content;
   public $tab_id;

   public function __construct($type_tab, $tab_id, $tab_title, $tab_description, $tab_icon, $tab_button, $tab_content, $tab_final)
   {
      $this->root_theme = get_template_directory_uri();
      $this->type_tab = $this->cw_type_tab($type_tab);
      $this->tab_id = $this->cw_tab_id($tab_id);
      $this->tab_title = $this->cw_tab_title($tab_title);
      $this->tab_description = $this->cw_tab_description($tab_description);
      $this->tab_icon = $this->cw_tab_icon($tab_icon);
      $this->tab_content = $this->cw_tab_content($tab_content);
      $this->tab_final = $this->cw_tab_final($tab_final);
   }

   public function cw_type_tab($type_tab)
   {
      $cw_type_tab = $type_tab;
      return $cw_type_tab;
   }

   public function cw_tab_id($tab_id)
   {
      $cw_tab_id = NULL;
      return $cw_tab_id;
   }

   public function cw_tab_title($tab_title)
   {
      $cw_tab_title_object = new CW_Title(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      $cw_tab_title = $cw_tab_title_object->title_final;
      return $cw_tab_title;
   }

   public function cw_tab_description($tab_description)
   {
      $cw_tab_description_object = new CW_Parargraph(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      $cw_tab_description = $cw_tab_description_object->paragraph_final;
      return $cw_tab_description;
   }

   public function cw_tab_icon($tab_icon)
   {
      $cw_tab_icon_object = new CW_Icon(NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
      $cw_tab_icon = $cw_tab_icon_object->cw_final_icon(NULL, NULL);
      return $cw_tab_icon;
   }

   public function cw_tab_content($tab_content)
   {
      $cw_tab_content = NULL;
      return $cw_tab_content;
   }

   public function cw_tab_final($tab_final)
   {
      $cw_tab_final = NULL;
      return $cw_tab_final;
   }
}


class CW_Tabs
{
   public $root_theme;
   public $type_tabs;
   public $tabs_final;

   public function __construct($type_tabs, $tabs_final)
   {
      $this->root_theme = get_template_directory_uri();
      $this->type_tabs = $this->cw_type_tabs($type_tabs);
      $this->tabs_final = $this->cw_tabs_final($tabs_final);
   }

   public function cw_type_tabs($type_tabs)
   {
      if (have_rows('cw_tabs')) {
         while (have_rows('cw_tabs')) {
            the_row();
            $cw_type_tabs = get_sub_field('cw_type_tabs');
         }
      } else {
         $cw_type_tabs = NULL;
      }

      return $cw_type_tabs;
   }

   public function cw_tabs_final($tabs_final)
   {
      $cw_tabs_nav = '';
      $cw_tabs_content = '';

      if (have_rows('cw_tabs')) {
         while (have_rows('cw_tabs')) {
            the_row();
            if (have_rows('cw_tabs_repeater')) {
               if ($this->type_tabs == 'type 1') {
                  $cw_tabs_nav .= '<ul class="nav nav-tabs nav-tabs-basic">';
                  $cw_tabs_content .= '<div class="tab-content mt-0 mt-md-5">';
               }
               while (have_rows('cw_tabs_repeater')) {
                  the_row();
                  if (get_row_index() == '1') {
                     $active_class = ' active';
                  } else {
                     $active_class = NULL;
                  }
                  $tab_object = new CW_Tab($this->type_tabs, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
                  $cw_tabs_nav .= '<li class="nav-item"> <a class="nav-link' . $active_class . '" data-bs-toggle="tab" href="#tab3-' . get_row_index() . '">' . $tab_object->tab_title . '</a> </li>';

                  $template = array(
                     array('core/paragraph', array(
                        'placeholder' => 'Add a root-level paragraph',
                     )),
                     array('core/columns', array(), array(
                        array('core/column', array(), array(
                           array('core/image', array()),
                        )),
                        array('core/column', array(), array(
                           array('core/paragraph', array(
                              'placeholder' => 'Add a inner paragraph'
                           )),
                        )),
                     ))
                  );

                  $cw_tabs_content .= '<div class="tab-pane fade show' . $active_class . '" id="tab3-' . get_row_index() . '"><InnerBlocks template="' . esc_attr(wp_json_encode($template)) . '" templateLock="all" /></div><!--/.tab-pane -->';
               }
               $cw_tabs_nav .= '</ul>';
               $cw_tabs_content .= '</div>';
               $cw_tabs_final = $cw_tabs_nav . $cw_tabs_content;
            } else {
               $cw_tabs_final = NULL;
            }
         }
      }
      return $cw_tabs_final;
   }
}
