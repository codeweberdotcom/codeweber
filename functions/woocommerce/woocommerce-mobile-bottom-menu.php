<?php
function add_mobile_bottom_menu()
{
?>
   <nav class="bg-light fixed-bottom d-lg-none rounded  zindex-20">
      <div class="row text-center">
         <div class="col">
            <a class="nav-link pb-0" href="/"><i class="uil uil-home fs-20 text-ash"></i></a>
            <div class="fs-10 pb-2">Главная</div>
         </div>
         <div class="col">
            <a class="nav-link pb-0" href="/shop/"><i class="uil uil-shop fs-20 text-ash"></i></i></a>
            <div class="fs-10 pb-2">Магазин</div>
         </div>
         <div class="col">
            <a class="nav-link pb-0" href="/my-account/"><i class="uil uil-user-circle fs-20 text-ash"></i></a>
            <div class="fs-10 pb-2">Кабинет</div>
         </div>
         <div class="col">
            <a href="#" class="nav-link position-relative d-flex flex-row align-items-center pb-0" id="header-cart" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
               <i class="uil uil-shopping-cart fs-20 text-ash"></i>
               <span class="badge badge-cart bg-primary"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </a>
            <div class="fs-10 pb-2">Корзина</div>
         </div>
      </div>
   </nav>
<?php
}
add_action('codeweber_end_body', 'add_mobile_bottom_menu', 5);
?>