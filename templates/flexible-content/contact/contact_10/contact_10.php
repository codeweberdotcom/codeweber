<section class="wrapper bg-light">
   <div class="container py-14 pt-lg-16 pb-lg-0">
      <div class="row gx-lg-8 gx-xl-0 gy-10 align-items-center">
         <div class="col-lg-6 col-xl-5 position-relative d-none d-lg-block">
            <div class="shape rounded-circle bg-soft-primary rellax w-21 h-21" data-rellax-speed="1" style="top: 8rem; left: 2rem"></div>
            <figure class="ps-xxl-10"><img src="./assets/img/photos/woman.png" srcset="./assets/img/photos/woman@2x.png 2x" alt=""></figure>
         </div>
         <!--/column -->
         <div class="col-lg-6 col-xl-5 offset-xl-1">
            <h2 class="display-4 mb-3">Get in Touch</h2>
            <p class="lead mb-8 pe-xl-10">Have any questions? Reach out to us from our contact form and we will get back to you shortly.</p>
            <form class="contact-form needs-validation" method="post" action="./assets/php/contact.php" novalidate>
               <div class="messages"></div>
               <div class="form-floating mb-4">
                  <input id="form_name2" type="text" name="name" class="form-control" placeholder="Jane" required="required" data-error="Name is required.">
                  <label for="form_name2">Name *</label>
                  <div class="valid-feedback">
                     Looks good!
                  </div>
                  <div class="invalid-feedback">
                     Please enter your name.
                  </div>
               </div>
               <div class="form-floating mb-4">
                  <input id="form_email2" type="email" name="email" class="form-control" placeholder="jane.doe@example.com" required="required" data-error="Valid email is required.">
                  <label for="form_email2">Email *</label>
                  <div class="valid-feedback">
                     Looks good!
                  </div>
                  <div class="invalid-feedback">
                     Please provide a valid email address.
                  </div>
               </div>
               <div class="form-floating mb-4">
                  <textarea id="form_message2" name="message" class="form-control" placeholder="Your message" style="height: 150px" required></textarea>
                  <label for="form_message2">Message *</label>
                  <div class="valid-feedback">
                     Looks good!
                  </div>
                  <div class="invalid-feedback">
                     Please enter your messsage.
                  </div>
               </div>
               <input type="submit" class="btn btn-primary rounded-pill btn-send mb-3" value="Send message">
               <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </form>
            <!-- /form -->
         </div>
         <!--/column -->
      </div>
      <!--/.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /section -->