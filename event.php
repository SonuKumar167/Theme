<?php 
 session_start();
 error_reporting(0);
 $title="EventList";
 include 'header.php'; ?>
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
         <div id="content-wrapper">
            <div class="container-fluid">
			  <div class="top-category section-padding mb-4">
			    <div class="row">
                     <div class="col-md-12">
                        <div class="main-title">
                           
                           <h6>Add Event</h6>
                        </div>
					    <div class="login-main-left" style="max-width:none;">
						<form class="form-inline">
                        <div class="form-group">
                             <input type="email" class="form-control" id="email" placeholder="Enter Email Id" name="email" required>
                        </div>
						&nbsp;&nbsp;
                        <div class="form-group">
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
                        </div>
                     </div>
				</div>
			  
			  </div>
			  <hr>
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="main-title">
                           
                           <h6>Event List</h6>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                              <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                              <div class="time">3:50</div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Room Name</a>
                              </div>
                              <div class="video-page text-success">
                                 Room Enter Time - 2020-07-05 20:00:00
                              </div>
                              <div class="channels-card-image-btn">
		                         <button type="button" class="btn btn-success btn-sm border-none">Enter Room</button>
							</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                              <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                              <div class="time">3:50</div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Room Name</a>
                              </div>
                              <div class="video-page text-success">
                                 Room Enter Time - 2020-07-05 20:00:00
                              </div>
                              <div class="channels-card-image-btn">
		                         <button type="button" class="btn btn-success btn-sm border-none">Enter Room</button>
							</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                              <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                              <div class="time">3:50</div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Room Name</a>
                              </div>
                              <div class="video-page text-success">
                                 Room Enter Time - 2020-07-05 20:00:00
                              </div>
                              <div class="channels-card-image-btn">
		                         <button type="button" class="btn btn-success btn-sm border-none">Enter Room</button>
							</div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                           <div class="video-card-image">
                              <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                              <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                              <div class="time">3:50</div>
                           </div>
                           <div class="video-card-body">
                              <div class="video-title">
                                 <a href="#">Room Name</a>
                              </div>
                              <div class="video-page text-success">
                                 Room Enter Time - 2020-07-05 20:00:00
                              </div>
                              <div class="channels-card-image-btn">
		                         <button type="button" class="btn btn-success btn-sm border-none">Enter Room</button>
							</div>
                           </div>
                        </div>
                     </div>
                        
                     </div>
                     
                     
                  </div>
                  <nav aria-label="Page navigation example">
                     <ul class="pagination justify-content-center pagination-sm mb-0">
                        <li class="page-item disabled">
                           <a tabindex="-1" href="#" class="page-link">Previous</a>
                        </li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item">
                           <a href="#" class="page-link">Next</a>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
            
               <div class="modal-body text-center f_list">Added in List</div>
               
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Owl Carousel -->
      <script src="vendor/owl-carousel/owl.carousel.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="js/custom.js"></script>
   </body>

</html>