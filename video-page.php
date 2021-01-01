<?php 
 session_start();
 error_reporting(0);
 $title="Dashboard";
 include 'header.php'; ?>
      <div id="wrapper">
         <!-- Sidebar -->
         <?php include 'sidebar.php'; ?>
         <div id="content-wrapper">
            <div class="container-fluid pb-0">
               <div class="video-block section-padding">
                  <div class="row">
                     <div class="col-md-8">
                        <div class="single-video-left">
                           <div class="single-video">
                              <iframe width="100%" height="315" src="https://www.youtube-nocookie.com/embed/8LWZSGNjuF0?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                           </div>
                           <div class="single-video-title box mb-3">
                              <h2><a href="#">Contrary to popular belief, Lorem Ipsum (2019) is not.</a></h2>
                              <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                           </div>
                           <div class="myDiv single-video-author">
						     <h4>Chat</h4>
							  <button  class="expandScr"><i class="fa fa-expand"></i></button>
                              <div class="mesgs">
                                 <div class="msg_history">
                                    <div class="incoming_msg">
                                       <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                                       <div class="received_msg">
                                          <div class="received_withd_msg">
                                            <p>Test which is a new approach to have all solutions</p>
                                            <span class="time_date"> 11:01 AM    |    June 9</span>
										  </div>
                                       </div>
                                    </div>
                                    <div class="outgoing_msg">
                                       <div class="sent_msg">
                                          <p>Test which is a new approach to have all solutions</p>
                                           <span class="time_date"> 11:01 AM    |    June 9</span> </div>
                                        </div>
                                    </div>
                                    <div class="type_msg">
                                      <div class="input_msg_write">
                                         <input type="text" class="write_msg" placeholder="Type a message" />
                                         <button class="msg_send_btn" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                       </div>
                                    </div>
                                </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="single-video-right">
                           <div class="row">
                              <div class="col-md-12">
                                 
                                 <div class="main-title">
                                    <div class="btn-group float-right right-action">
                                       <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                       </a>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                          <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                       </div>
                                    </div>
                                    <h6>Up Next</h6>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v1.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Here are many variati of passages of Lorem</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v3.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Culpa qui officia deserunt mollit anim</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v4.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Deserunt mollit anim id est laborum.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v5.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Exercitation ullamco laboris nisi ut.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v6.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">There are many variations of passages of Lorem</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                                 <div class="video-card video-card-list">
                                    <div class="video-card-image">
                                       <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                       <a href="#"><img class="img-fluid" src="img/v2.png" alt=""></a>
                                       <div class="time">3:50</div>
                                    </div>
                                    <div class="video-card-body">
                                       <div class="btn-group float-right right-action">
                                          <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                          </a>
                                          <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                             <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                          </div>
                                       </div>
                                       <div class="video-title">
                                          <a href="#">Duis aute irure dolor in reprehenderit in.</a>
                                       </div>
                                       <div class="video-page text-success">
                                          Education  <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                       </div>
                                       <div class="video-view">
                                          1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            
         </div>
         <!-- /.content-wrapper -->
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
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
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
      <script src="js/custom.js">
	  <script>
	  
 
	</script>
   </body>

</html>