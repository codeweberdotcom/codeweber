<?php
// --- New Gutenberg Block Layout Codeweber---
function checkCategoryOrder($categories)
{
   //custom category array
   $temp = array(
      'slug'  => 'codeweber',
      'title' => 'Codeweber Blocks'
   );
   //new categories array and adding new custom category at first location
   $newCategories = array();
   $newCategories[0] = $temp;
   //appending original categories in the new array
   foreach ($categories as $category) {
      $newCategories[] = $category;
   }
   //return new categories
   return $newCategories;
}
add_filter('block_categories_all', 'checkCategoryOrder', 99, 1);


// --- ACF Flexible Block
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init()
{

   // Check function exists.
   if (function_exists('acf_register_block_type')) {

      // Register a hero_banner block.
      acf_register_block_type(array(
         'name'              => 'hero_banner',
         'title'             => __('Hero banner'),
         'description'       => __('Hero banner flexible block.'),
         'render_template'   => 'templates/flexible-content/hero_banner.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a hero_banner block.
      acf_register_block_type(array(
         'name'              => 'grid',
         'title'             => __('Grid block'),
         'description'       => __('Grid block flexible block.'),
         'render_template'   => 'templates/flexible-content/grid.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a slider block.
      acf_register_block_type(array(
         'name'              => 'sliders',
         'title'             => __('Slider'),
         'description'       => __('Slider block flexible block.'),
         'render_template'   => 'templates/flexible-content/sliders.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      // Register a slider block.
      acf_register_block_type(array(
         'name'              => 'process',
         'title'             => __('Process'),
         'description'       => __('Process block flexible block.'),
         'render_template'   => 'templates/flexible-content/process.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',

      ));

      acf_register_block_type(array(
         'name'              => 'widgets',
         'title'             => __('Widgets'),
         'description'       => __('Widgets flexible block.'),
         'render_template'   => 'templates/flexible-content/widgets.php',
         'category'          => 'codeweber',
         'align'           => 'full',
         'supports'        => array(
            'align'        => array('full'),
            'align'        => true,
         ),
         'mode' => 'preview',
      ));

      acf_register_block_type(
         array(
            'name'              => 'features',
            'title'             => __('Features'),
            'description'       => __('Features.'),
            'render_template'   => 'templates/flexible-content/features.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',
         )
      );

      acf_register_block_type(
         array(
            'name'              => 'facts',
            'title'             => __('Facts'),
            'description'       => __('Facts.'),
            'render_template'   => 'templates/flexible-content/facts.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',

         )

      );
      acf_register_block_type(
         array(
            'name'              => 'faq',
            'title'             => __('Faq'),
            'description'       => __('Faq.'),
            'render_template'   => 'templates/flexible-content/faq.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
            ),
            'mode' => 'preview',

         )

      );
      // Register a restricted block.
      acf_register_block_type(array(
         'name'                => 'restricted',
         'title'                => 'Restricted',
         'description'        => 'A restricted content block.',
         'category'            => 'formatting',
         'mode'                => 'preview',
         'supports'            => array(
            'align' => true,
            'mode' => false,
            'jsx' => true
         ),
         'render_template' => 'template-parts/flexible-content/block-restricted.php',
      ));

      // Register a section.
      acf_register_block_type(
         array(
            'name'              => 'section',
            'title'             => __('Section'),
            'description'       => __('Section.'),
            'render_template'   => 'templates/flexible-content/section.php',
            'category'          => 'codeweber',
            'mode'                    => 'auto',
            'align'           => 'full',
            'supports'        => array(
               'align'        => array('full'),
               'align'        => true,
               'jsx' => true,
            ),
            'mode' => 'preview',

         )

      );
   }
}
