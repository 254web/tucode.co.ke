<!DOCTYPE html>
<html lang="en">

<body class="page-contact">

<?php include "fragments/header.php";?>

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
<div class="container position-relative d-flex flex-column align-items-center">

  <h2>Contact</h2>
  <ol>
    <li><a href="index.php">Home</a></li>
    <li>Contact</li>
  </ol>

</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<div class="container position-relative" data-aos="fade-up">

  <div class="row gy-4 d-flex justify-content-end">

    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

      <div class="info-item d-flex">
        <i class="bi bi-geo-alt flex-shrink-0"></i>
        <div>
          <h4>Location:</h4>
          <p>Mombasa Coast, Kenya</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex">
        <i class="bi bi-envelope flex-shrink-0"></i>
        <div>
          <h4>Email:</h4>
          <p>info@tucode.co.ke</p>
        </div>
      </div><!-- End Info Item -->

      <div class="info-item d-flex">
        <i class="bi bi-phone flex-shrink-0"></i>
        <div>
          <h4>Call:</h4>
          <p>+254 746 512687</p>
        </div>
      </div><!-- End Info Item -->

    </div>

    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        
      <!-- <form action="mail.php" method="post" role="form" class="php-email-form">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>

        <div class="text-center"><button type="submit">Send Message</button></div>
      </form> -->
  
  <form method="post"  action="mail.php" name="contactform" id="contactform" class="">
    <label for="name" accesskey="U">Full name <span>*</span></label>
    <input name="name" class="form-control input-field" type="text" id="name" size="30" value="" required/>

    <label for="email" accesskey="E">Email Address <span>*</span></label>
    <input name="email" class="form-control input-field" type="text" id="email" size="30" value="" required/>
    
    <label for="comments" accesskey="C">Message <span>*</span></label>
    <textarea name="comments" rows="9" id="comments" rows="7" class="form-control input-field" required>
    </textarea>
    
    <input type="submit" class="form-button submit" id="submit" value="SEND MESSAGE" />
  </form>

    </div><!-- End Contact Form -->

  </div>

</div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php include "fragments/footer.php";?>

</body>

</html>