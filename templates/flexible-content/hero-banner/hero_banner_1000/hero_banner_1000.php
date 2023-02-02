<?php

$accordeon = new CW_Accordeon(NULL, NULL, NULL, NULL, NULL, NULL,  NULL);
?>

<section class="wrapper bg-gradient-primary">
   <div class="container pt-10 pt-md-14 pb-8 ">
      <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">

         <?php
         echo $accordeon->accordeon_final;
         ?>

      </div>
   </div>
</section>