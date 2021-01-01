<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sign Up - Video Sharing Portal</title>
      <!-- Favicon Icon
      <link rel="icon" type="image/png" href="img/favicon.png">
      <!-- Bootstrap core CSS-->
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom fonts for this template-->
      <!-- Custom styles for this template-->
      <link href="css/osahan.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
	  <script src="js/angular.min.js"></script>

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
               <div class="col-md-5 p-5 bg-white full-height" ng-app="SignUp" ng-controller="Sign">
                  <div class="login-main-left">
                     <div class="text-center mb-5 login-main-left-header pt-4">
                        <!-- <img src="img/favicon.png" class="img-fluid" alt="LOGO"> -->
                        <h5 class="mt-3 mb-3">Welcome to Video Sharing Portal</h5>
						<h3>Sign Up</h3>
                     </div>
                     <form ng-submit="SignUp()">
                        <div class="form-group">
                           <label>Email Id</label>
                           <input type="text" class="form-control" name="email" placeholder="Enter Email Id" ng-model="email" required>
                        </div>
                        <div class="mt-4">
                           <button type="submit" class="btn btn-outline-primary btn-block btn-lg">Sign Up</button>
                        </div>
                     </form>
                     <div class="text-center mt-5">
                        <p class="light-gray">Already have an Account? <a href="./SignIn">Sign In</a></p>
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
	     var app = angular.module("SignUp", []);
         app.controller("Sign", function($scope) {
         $scope.SignUp = function () {
      //alert($scope.email);
	   $.ajax({
	               type: "GET",
	               url: "http://localhost:8081/Mail",
				   crossDomain:true,
	               data:{email:$scope.email},
				   dataType: 'json',
	               success:function(data){
					  if(data.status == 0){
					    window.location.href = './SignIn' ;
						sessionStorage.setItem("msg", data.msg);
					  }
					  else{
					     sessionStorage.setItem("email", $scope.email);
						 sessionStorage.setItem("Otp", data.Otp);
					     window.location.href = './SignValid';
                        //redirectPost('./SignValid', data.Otp, $scope.email);
					  }
	                },
	                error:function (){}
	            });
  }
});
	  </script>
   </body>
</html>