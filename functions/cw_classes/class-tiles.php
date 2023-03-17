<?php

//* ---Tiles--

class CW_Tiles
{
   public $root_theme;
   public $type_tiles;
   public $tiles_object_array;
   public $final_tiles;

   public function __construct($type_tiles, $tiles_object_array, $final_tiles)
   {
      $this->root_theme = get_template_directory_uri();

      $this->type_tiles = $this->cw_type_tiles($type_tiles);
      $this->tiles_object_array = $this->cw_tiles_object_array($tiles_object_array);
      $this->final_tiles = $this->cw_final_tiles($final_tiles);
   }

   public function cw_type_tiles($type_tiles)
   {
      if ($type_tiles !== NULL) {
         $cw_type_tiles = $type_tiles;
      } else {
         $cw_type_tiles = NULL;
      }
      return $cw_type_tiles;
   }

   public function cw_tiles_object_array($tiles_object_array)
   {
      if (is_array($tiles_object_array)) {
         $cw_tiles_object_array = $tiles_object_array;
      } else {
         $cw_tiles_object_array = NULL;
      }
      return $cw_tiles_object_array;
   }

   public function cw_final_tiles($final_tiles)
   {
      if ($this->type_tiles == 'Tiles 8') {
         $cw_final_tiles = '<div class="overlap-grid overlap-grid-2">';
         foreach ($this->tiles_object_array as $tiles_object) {
            $cw_final_tiles .= '<div class="item">' . $tiles_object . '</div><!--/.item -->';
         }
         $cw_final_tiles .= '</div><!--/.overlap-grid -->';
      } elseif ($this->type_tiles == 'Tiles 2') {






         $cw_final_tiles = ' <div class="row gx-md-5 gy-5">';
         $num_row = 0;
         foreach ($this->tiles_object_array as $tiles_object) {
            if ($num_row == 0) {
               $cw_final_tiles .= '<div class="col-md-4 offset-md-1 align-self-end"><figure class="rounded">' . $tiles_object . '</figure></div><!--/column -->';
            } elseif ($num_row == 1) {
               $cw_final_tiles .= '<div class="col-md-6 align-self-end">
    <figure class="rounded">' . $tiles_object . '</figure>
  </div>
  <!--/column -->';
            } elseif ($num_row == 2) {
               $cw_final_tiles .= '<div class="col-md-6">
    <figure class="rounded">' . $tiles_object . '</figure>
  </div>
  <!--/column -->';
            } elseif ($num_row == 3) {
               $cw_final_tiles .= '<div class="col-md-4 align-self-start">
    <figure class="rounded">' . $tiles_object . '</figure>
  </div>
  <!--/column -->';
            }
            $num_row++;
         }
         $cw_final_tiles .= '</div><!--/.row -->';
      } else {
         $cw_final_tiles = NULL;
      }

      return $cw_final_tiles;
   }
}
