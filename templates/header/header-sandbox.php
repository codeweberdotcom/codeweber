<header class="wrapper mb-1">
<nav class="navbar navbar-expand-lg classic transparent navbar-light">
  <div class="container flex-lg-row flex-nowrap align-items-center">
    <div class="navbar-brand w-100">
      <a href="./index.html">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/logo@2x.png 2x" alt="" />
      </a>
    </div>
    <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
      <div class="offcanvas-header d-lg-none">
        <a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-light.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/logo-light@2x.png 2x" alt="" /></a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
          <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
              <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown dropdown-mega"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Mega Menu</a>
            <ul class="dropdown-menu mega-menu">
              <li class="mega-menu-content">
                <div class="row gx-0 gx-lg-3">
                  <div class="col-lg-6">
                    <h6 class="dropdown-header">One</h6>
                    <div class="row gx-0">
                      <div class="col-lg-6">
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="#">Link</a></li>
                          <li><a class="dropdown-item" href="#">Link</a></li>
                          <li><a class="dropdown-item" href="#">Link</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-lg-6">
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="#">Link</a></li>
                          <li><a class="dropdown-item" href="#">Link</a></li>
                          <li><a class="dropdown-item" href="#">Link</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </div>
                  <!--/column -->
                  <div class="col-lg-3">
                    <h6 class="dropdown-header">Two</h6>
                    <ul class="list-unstyled">
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                    </ul>
                  </div>
                  <!--/column -->
                  <div class="col-lg-3">
                    <h6 class="dropdown-header">Three</h6>
                    <ul class="list-unstyled">
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                      <li><a class="dropdown-item" href="#">Link</a></li>
                    </ul>
                  </div>
                  <!--/column -->
                </div>
                <!--/.row -->
              </li>
              <!--/.mega-menu-content-->
            </ul>
            <!--/.dropdown-menu -->
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown Large</a>
            <div class="dropdown-menu dropdown-lg">
              <div class="dropdown-lg-content">
                <div>
                  <h6 class="dropdown-header">One</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another Link</a></li>
                  </ul>
                </div>
                <!-- /.column -->
                <div>
                  <h6 class="dropdown-header">Two</h6>
                  <ul class="list-unstyled">
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Link</a></li>
                    <li><a class="dropdown-item" href="#">Another Link</a></li>
                  </ul>
                </div>
                <!-- /.column -->
              </div>
              <!-- /auto-column -->
            </div>
          </li>
        </ul>
        <!-- /.navbar-nav -->
        <div class="d-lg-none mt-auto pt-6 pb-6 order-4">
          <a href="mailto:first.last@email.com" class="link-inverse">info@email.com</a>
          <br /> 00 (123) 456 78 90 <br />
          <nav class="nav social social-white mt-4">
            <a href="#"><i class="uil uil-twitter"></i></a>
            <a href="#"><i class="uil uil-facebook-f"></i></a>
            <a href="#"><i class="uil uil-dribbble"></i></a>
            <a href="#"><i class="uil uil-instagram"></i></a>
            <a href="#"><i class="uil uil-youtube"></i></a>
          </nav>
          <!-- /.social -->
        </div>
        <!-- /offcanvas-nav-other -->
      </div>
      <!-- /.offcanvas-body -->
    </div>
    <!-- /.navbar-collapse -->
    <div class="navbar-other ms-lg-4">
      <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item"><a class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-info"><i class="uil uil-info-circle"></i></a></li>
        <li class="nav-item d-none d-md-block">
          <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="trueLink">Sign In</a>
        </li>
        <li class="nav-item d-lg-none">
          <button class="hamburger offcanvas-nav-btn"><span></span></button>
        </li>
      </ul>
      <!-- /.navbar-nav -->
    </div>
    <!-- /.navbar-other -->
  </div>
  <!-- /.container -->
</nav>
<!-- /.navbar -->
<div class="modal fade" id="modal-signin" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h2 class="mb-3 text-start">Welcome Back</h2>
        <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
        <form class="text-start mb-3">
          <div class="form-floating mb-4">
            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
            <label for="loginEmail">Email</label>
          </div>
          <div class="form-floating password-field mb-4">
            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
            <span class="password-toggle"><i class="uil uil-eye"></i></span>
            <label for="loginPassword">Password</label>
          </div>
          <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
        </form>
        <!-- /form -->
        <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
        <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
        <div class="divider-icon my-4">or</div>
        <nav class="nav social justify-content-center text-center">
          <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
        </nav>
        <!--/.social -->
      </div>
      <!--/.modal-content -->
    </div>
    <!--/.modal-body -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->
<div class="modal fade" id="modal-signup" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content text-center">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <h2 class="mb-3 text-start">Sign up to Sandbox</h2>
        <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
        <form class="text-start mb-3">
          <div class="form-floating mb-4">
            <input type="text" class="form-control" placeholder="Name" id="loginName">
            <label for="loginName">Name</label>
          </div>
          <div class="form-floating mb-4">
            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
            <label for="loginEmail">Email</label>
          </div>
          <div class="form-floating password-field mb-4">
            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
            <span class="password-toggle"><i class="uil uil-eye"></i></span>
            <label for="loginPassword">Password</label>
          </div>
          <div class="form-floating password-field mb-4">
            <input type="password" class="form-control" placeholder="Confirm Password" id="loginPasswordConfirm">
            <span class="password-toggle"><i class="uil uil-eye"></i></span>
            <label for="loginPasswordConfirm">Confirm Password</label>
          </div>
          <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</a>
        </form>
        <!-- /form -->
        <p class="mb-0">Already have an account? <a href="#" data-bs-target="#modal-signin" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign in</a></p>
        <div class="divider-icon my-4">or</div>
        <nav class="nav social justify-content-center text-center">
          <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
          <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
        </nav>
        <!--/.social -->
      </div>
      <!--/.modal-content -->
    </div>
    <!--/.modal-body -->
  </div>
  <!--/.modal-dialog -->
</div>
<!--/.modal -->
<div class="offcanvas offcanvas-end text-inverse" id="offcanvas-info" data-bs-scroll="true">
  <div class="offcanvas-header">
    <a href="./index.html"><img src="<?php echo get_template_directory_uri(); ?>/dist/img/logo-light.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/logo-light@2x.png 2x" alt="" /></a>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="widget mb-8">
      <p>Sandbox is a multipurpose HTML5 template with various layouts which will be a great solution for your business.</p>
    </div>
    <!-- /.widget -->
    <div class="widget mb-8">
      <h4 class="widget-title text-white mb-3">Contact Info</h4>
      <address> Moonshine St. 14/05 <br /> Light City, London </address>
      <a href="mailto:first.last@email.com">info@email.com</a><br /> 00 (123) 456 78 90
    </div>
    <!-- /.widget -->
    <div class="widget mb-8">
      <h4 class="widget-title text-white mb-3">Learn More</h4>
      <ul class="list-unstyled">
        <li><a href="#">Our Story</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    <!-- /.widget -->
    <div class="widget">
      <h4 class="widget-title text-white mb-3">Follow Us</h4>
      <nav class="nav social social-white">
        <a href="#"><i class="uil uil-twitter"></i></a>
        <a href="#"><i class="uil uil-facebook-f"></i></a>
        <a href="#"><i class="uil uil-dribbble"></i></a>
        <a href="#"><i class="uil uil-instagram"></i></a>
        <a href="#"><i class="uil uil-youtube"></i></a>
      </nav>
      <!-- /.social -->
    </div>
    <!-- /.widget -->
  </div>
  <!-- /.offcanvas-body -->
</div>
<!-- /.offcanvas -->
    </header>