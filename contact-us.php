<?php include 'header-top.php';

session_start();
if (!isset($_SESSION['csrf_token'])) {
   $str = rand();
   $token = sha1($str);
   $_SESSION['csrf_token'] = $token;
}
$response = array();
if (isset($_POST['submit'])) {

   if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
      unset($_SESSION['csrf_token']);
      $name = mysqli_real_escape_string($con, trim($_POST['name']));
      $email = mysqli_real_escape_string($con, trim($_POST['email']));
      $phone = mysqli_real_escape_string($con, trim($_POST['phone']));
      $message = mysqli_real_escape_string($con, trim($_POST['message']));
      $subject = mysqli_real_escape_string($con, trim($_POST['subject']));

      $insertSlider = "INSERT INTO `contact_us` ( name, email, phone,subject , message) VALUES ('$name','$email','$phone','$subject','$message')";
      $queryResultSlider = mysqli_query($con, $insertSlider);
      if ($queryResultSlider) {
         //echo '<script>alert("Inquiry Successfully Placed !!")</script>';
         //  echo '<script>document.location="contact.php"</script>';
         $response["Status"] = "success";
         $response["msg"] = "Inquiry Successfully Placed !!";
         $str = rand();
         $token = sha1($str);
         $_SESSION['csrf_token'] = $token;
      } else {
         $response["Status"] = "error";
         $response["msg"] = "Something went wrong !!";
      }
   } else {
      $response["Status"] = "error";
      $response["msg"] = "CSRF token mismatch, please refresh page and try again later.";
   }
}
?>
 <title>Contact Now Dr. Neel Gupta – NG Plastic Surgery Ahmedabad</title>
      <meta name="description" content="Schedule your consultation with Dr. Neel Gupta at NG Plastic Surgery Ahmedabad for expert, natural, and safe cosmetic results. Transform with confidence!" />
      <meta name="google-site-verification" content="lfUxey5pvQEF-u1zIbF1J5iLOjmjuGek8cUKlFFiwdc" />
      
<link rel="canonical" href="https://www.ngplasticsurgery.in/contact-us" />
<?php include('header.php'); ?>


<section class="bredcram_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
               <h1 style="font-size:35px;"> <label class="bredcarm-title">Contact Us</label></h1>
                <ul>
                    <li class="active"><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="book_wrapper section-padding contact-section">
   <div class="container">
      <div class="row">
         <?php if(!empty($response["Status"]) && $response["Status"] == "success") { ?>
         <div class="alert alert-success">
           <strong>Success!</strong> <?php echo $response["msg"];?>
         </div>
         <?php } ?>
         <?php if(!empty($response["Status"]) && $response["Status"] == "error") { ?>
         <div class="alert alert-danger">
           <strong>Error!</strong> <?php echo $response["msg"];?>
         </div>
         <?php } ?>
         <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <p class="subtitle">Contact Us</p>
            <p class="title">Get In Touch</p>
            <p class="contact-text text-justify">At NG Plastic Surgery in Ahmedabad, we are always eager to assist you with any additional information you need. We truly value and look forward to your feedback!</p>
            <div class="working-hours">
               <div class="box-title">
                  <p class="title">Working Hours</p>
               </div>
               <div class="schedule">
                  <div class="schedule-row">
                     <span class="day">Monday – Saturday</span>
                     <span class="time">10:00 AM – 01:00 PM<br>05:00 PM – 08:00 PM</span>
                  </div>
                  <div class="schedule-row closed">
                     <span class="day">Sunday</span>
                     <span class="time">Closed</span>
                  </div>
               </div>
            </div>

         </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mt-4">
            <form method="post">
                <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token'] ?>">
               <div class="row">
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Full Name <span class="book-com">*</span></label>
                     <input type="text" name="name" required>
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Mobile Number <span class="book-com">*</span></label>
                     <input type="tel" name="phone" required>
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Email Address <span class="book-com">*</span></label>
                     <input type="email" name="email" required>
                  </div>
                  <div class="col-md-6 col-sm-12 mt-4">
                     <label for="#" class="book-label">Subject <span class="book-com">*</span></label>
                     <input type="text" name="subject" required>
                  </div>

                  <div class="col-md-12 col-sm-12 mt-4">
                     <label for="#" class="book-label">Write your comment here <span class="book-com">*</span>  </label>
                     <textarea class="" name="message" placeholder=" " required></textarea>

                     <div class="main-btn mt-4">
                        <button   type="submit" name="submit" value="submit" >Send Message</button>
                        <!-- <a href="#" type="submit" name="submit" value="submit" >Send Message</a> -->
                     </div>
                  </div>

               </div>
            </form>
         </div>

      </div>
   </div>
</section>

<section class="contact-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d98015.06569034292!2d72.593433!3d23.103287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e835e631d5603%3A0xafdcbca461636809!2sNG%20Plastic%20Surgery%20%7C%20Plastic%20Surgeon%20In%20Ahmedabad%20%7C%20Hair%20Transplant%20%7C%20Gynecomastia%20%7C%20Breast%20Reduction%20%26%20Implants!5e1!3m2!1sen!2sus!4v1755496161760!5m2!1sen!2sus" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>
<script type="text/javascript">
   $(document).ready(function() {
         setTimeout(function() {
           $(".alert").remove();
         }, 2500);
   });
</script>