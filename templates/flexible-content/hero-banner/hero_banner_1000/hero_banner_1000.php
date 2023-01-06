<?php

/**
 * CW
 */
// $testt = new CW_Features;
// printr($testt);

// echo $testt->features_item_final;
/* new CW_Title(
 * $title_color = NULL, 
 * $title_text = NULL, 
 * $title_tag = NULL, 
 * $title_display = NULL, 
 * $title_lead = NULL, 
 * $title_fs = NULL, 
 * $title_align = NULL, 
 * $title_id);
 */
$features = new CW_Features(
   NULL,
   NULL,
   NULL,
   NULL,
   '<div class="col-md-6 col-xl-3 %1$s"><div class="card shadow-lg"><div class="card-body">%2$s<h4>%3$s</h4><p class="mb-5">%4$s</p>%5$s</div><!--/.card-body --></div><!--/.card --></div><!--/column -->',
   '<div class="col-md-6 col-xl-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <img src="' . get_template_directory_uri() . '/dist/img/icons/lineal/search-2.svg" class="svg-inject icon-svg icon-svg-md text-yellow mb-3" alt="" />
              <h4>SEO Services</h4>
              <p class="mb-2">Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras justo.</p>
              <a href="%6$s" class="more hover link-yellow">Learn More</a>
            </div>
            <!--/.card-body -->
          </div>
          <!--/.card -->
        </div>
        <!--/column -->'
);

echo $features->features_item_final;
