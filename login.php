<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sign In - Video Sharing Portal</title>
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   </head>
   <body class="login-main-body">
      <section class="login-main-wrapper">
         <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">   
               <div class="col-md-7">
                  <div class="login-main-right bg-white p-5 mt-5 mb-5">
                     <div class="owl-carousel owl-carousel-login">
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">​Watch videos</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                        <div class="item">
                           <div class="carousel-login-card text-center">
                              <img src="img/login.png" class="img-fluid" alt="LOGO">
                              <h5 class="mt-5 mb-3">Download videos effortlessly</h5>
                              <p class="mb-4">when an unknown printer took a galley of type and scrambled<br> it to make a type specimen book. It has survived not <br>only five centuries</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 p-5 bg-white full-height">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <h5 class="mt-3 mb-3">Welcome to Video Sharing Portal</h5>
						<h3>Sign In</h3>
						<p class="error"></p>
                     </div>
                     <form>
                        <div class="form-group">
                           <label>Email Id</label>
                             <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email" required>
                        </div>
                        <div class="form-group">
                           <label>Password</label>
                               <input type="password" class="form-control" id="pass" placeholder="Enter Password" name="pass" required>
                        </div>
                        <div class="mt-4">
                           <div class="row">
                              <div class="col-12">
                                 <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign In</button>
                              </div>
                           </div>
                        </div>
                     </form>
                     <div class="text-center mt-5">
                        <p class="light-gray">Don’t have an account? <a href="./">Sign Up</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
	  <script>
	$(".btn-block").click(function(){
	   var email = $('#email').val();
	   var pass = $('#pass').val();
	   $.ajax({
	               type: "GET",
	               url: "http://localhost:8081/Login",
				   data:{email:email,pass:pass},
				   crossDomain:true,
				   dataType: 'json', 
	               success:function(data){
				      if(data.status == 1){
						$.each(data.data, function(index, value) {
						   sessionStorage.setItem("id", value.id);
						   sessionStorage.setItem("email", value.email);
						   sessionStorage.setItem("fname", value.firstname);
						   sessionStorage.setItem("lname", value.lastname);
						   sessionStorage.setItem("img", value.img);
                           window.location.href = "./Dashboard";
						});
					  }
					  else{
						  $('.error').html(data.msg);
					  }
	                },
	                error:function (){}
	            }); 
});
</script>
   </body>

</html>