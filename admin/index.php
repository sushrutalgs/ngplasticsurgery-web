<?php

include_once('header.php');

include "Class/Admin.php";
if(isset($_POST['log-in']) && $_POST['log-in']=='Log me in') {
$Admin_class = new Admin();
$response = $Admin_class->AdminLogin($_POST);
}
?>

    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-6 col-xl-6">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="align-items-center justify-content-between mb-3 text-center">
                            <img class="mine-logo" src="<?php echo LOGO_URL; ?>" alt="<?php echo Company_Name ?>" title="<?php echo Company_Name ?>" he-ight="150" width="150" />
                            <a href="index.php" class="">
                                <h3 class="text-primary"><?php echo Company_Name ?></h3>
                            </a>
                        </div>
                        <div class="text-center">
                            <h3>Sign In</h3>
                        </div>
                        <form class="form-signin" method="post" name="supportLoginInformation" id="supportLoginInformation">
                        <div class="form-floating mb-3">

                            <input type="text" class="form-control" id="userName" name="userName" placeholder="user name">
                            <label for="userName">User Name</label>
                        </div>
                        <label id="userName-error" class="error" for="userName"></label>
                        <div class="form-floating mb-4">
                            
                            <input type="password" class="form-control" id="passWord" name="passWord" placeholder="Password">
                            <label for="passWord">Password</label>
                        </div>
                        <label id="passWord-error" class="error" for="passWord"></label>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" value="Log me in" name="log-in">Sign In</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

   <?php include_once('footer.php'); ?>
   <script type="text/javascript">
    $(document).ready(function () {
      $("#supportLoginInformation").validate({
        rules: {
          userName: {
            required: true,
          },
          passWord: {
            required: true,
          }
        },
        messages: {
          userName: {
            required: "Please enter your username.",
          },
          passWord: {
            required: "Please enter your password.",
          }
        }
      });
    }); 
  </script>