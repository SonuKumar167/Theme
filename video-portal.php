<!doctype html>
<html>
  <head>
    <title>ShareMemento</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	  <link href="css/osahan.css" rel="stylesheet">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="vendor/owl-carousel/owl.theme.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
     video::-webkit-media-controls-timeline {
         display: none;
      }
      .buttonload {
        height: 40px;
        padding-top: 7px;
      }
      .right {
          margin-left:50%;
      }
        .box {
          position: absolute;
        }
        .boxb {
          background: #e779a5;
          border: 2px solid #ff7b29;
          position: absolute;
        }
        .boxb1 {
          background: #6f7c72;
          border: 2px solid #ff7b29;
          position: relative;
        }
        .box-1 {
          
          z-index: 3;
          position: absolute;
        }
        .box-2 {

          z-index: 3;
          position: absolute;
        }
        .box-3 {

        z-index: 1;
        }
        div1 { 
            width: 100%; 
        }
        .chatImg{
          height: 15px;
          float:right;
        }
        .camImg{
          height: 15px;
        }
        #webCamOpen{
          margin-top: 100px;
          float:right;
        }
        #webCamOpen:focus{
          border:none;
        }
        #camFrame{
          width:100%;height: 190px;border: none;
        }
        #chatRoom{
          background-color: #fafafa;
        }
        #WebCamRoom{
          background-color: #fafafa;
        }
        .vtitle{
          font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
          font-style: italic;
        }
        .video-top{
          margin-top: -15px;
        }
        .r_v_title{
          margin-top: 10px;
        }
        .v_title{
          font-size: 13px !important;
        }
        .myDiv.fullscreen{
    z-index: 9999; 
    width: 100%; 
    height: 100%; 
    position: fixed; 
    top: 0; 
    left: 0; 
    margin-top: 40px;
    margin-left: 224px;
 }
   </style>   
</head>
    
    <body id="page-top">
      <nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         &nbsp;&nbsp; 
         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <!-- <a class="navbar-brand mr-1" href="index.html"><img class="img-fluid" alt="" src="img/logo.png"></a> -->
         <!-- Navbar Search -->
         
         <!-- Navbar -->
         <ul class="navbar-nav ml-auto osahan-right-navbar">
            
            <li class="nav-item dropdown no-arrow osahan-right-navbar-user" ng-controller="profile">
               <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <img id="imgProfile"> <span id="un"></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="https://sharememento.com:6018/EditProfile"><i class="fas fa-fw fa-edit"></i> &nbsp; Edit Profile</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
               </div>
            </li>
         </ul>
      </nav>
<div id="wrapper">
    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
         <a class="nav-link" href="https://sharememento.com:6018/Dashboard">
         <i class="fas fa-fw fa-home"></i>
         <span>Home</span>
         </a>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-folder"></i>
         <span>Upload</span>
         </a>
         <div class="dropdown-menu">
            <a class="dropdown-item" id="VideoUploader">Upload Video</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" `="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-user-alt"></i>
         <span>Friends</span>
         </a>
         <div class="dropdown-menu">
          <a class="dropdown-item" href="https://sharememento.com:6018/Friends">All Friends</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-fw fa-video"></i>
         <span>Events</span>
         </a>
         <div class="dropdown-menu">
          <a class="dropdown-item" href="https://sharememento.com:6018/Event">Events</a>
         </div>
      </li>
      <li class="nav-item dropdown">
         <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fas fa-wrench"></i>
         <span>Setting</span>
         </a>
         <div class="dropdown-menu">
            <h6 class="dropdown-item">Privacy</h6>
            <h6 class="dropdown-item">Email Us</h6>
         </div>
      </li>
      
   </ul>
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="video-block section-padding">
               <div class="row">
                  <div class="col-md-8 video-top">               
                        <div class="single-video-left">
                           <div class="single-video">
                             <div id="div1" class="box-set">
                              <video class="box-1" id="video1" controls="true" width="100%" height="300"></video>
                              <video class="box-2" id="video2" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video3" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video4" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video5" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video6" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video7" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video8" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video9" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video10" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video11" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video12" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video13" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video14" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video15" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video16" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video17" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video18" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video19" controls="true" width="100%" height="290"></video>
                              <video class="box-2" id="video20" controls="true" width="100%" height="290"></video>
                           
                        
                             </div>
                            </div>
                            
                        <div class="single-video-author">
                                 
                                 <div class="row r_v_title">
                                  <div class="col-md-4">
                                    <h6 class="v_title">Video - <span id="v_title"></span></h6>
                                  </div>
                                  <div class="col-md-8">
                                     <h6 class="v_title">Event Name - <span id="r_title"></span></h6>
                                  </div>
                                  </div>
                                 <div class="row channels-card-image-btn">

                                  <button id='btnplay' type="button" class="btn btn-outline-primary btn-block btn-lg col-md-3 buttonload" onclick="playVideo()">Play Video</button>
                                  <!--- <button type="button">Play Video--</button> -->
                                  <button id='btnload' class="btn btn-outline-primary btn-block btn-lg col-md-3 buttonload">
                                    <i class="fa fa-refresh fa-spin"></i>Loading
                                  </button>
                                  &nbsp;&nbsp; <button type="button" class="btn btn-outline-primary btn-lg col-md-3 buttonload" onclick="openCamWindow()" >View Desktop</button>
                                <!-- &nbsp;&nbsp; <button type="button" class="btn btn-outline-primary btn-lg col-md-3 buttonload" onclick="fullScreen()" >Full WebCam</button>
                                -->
                                </div>
                              
                        </div>
                        </div>
                       
                  </div>
                  <div class="col-md-4" id="chatRoom">
                    
                     <div class="single-video-right">
                        <div class="row"> 
                           <div class="col-md-12">
                            
                              <div class="video-card video-card-list">
                                 <div class="video-card-body">
                                    <div class="video-title">
                                       <a href="#" class="v_title">Chat messages</a>
                                    </div>
                                  </div>
                                  <div class="mesgs">
                                       <div class="msg_history">
                                         
                                       </div>
                                       <div class="type_msg c_type_msg">
                                         <div class="input_msg_write">
                                            <input type="text" id="m1" autocomplete="off" class="write_msg" placeholder="Type a message" />
                                            <div id="div2">
                                              <input id="m" autocomplete="off" type="hidden"/>
                                              <input id="room" autocomplete="off" type="hidden"/>
                                              <input id="camport" autocomplete="off" type="hidden"/>
                                            </div>
                                            <button class="msg_send_btn" type="button" onclick="sendMessage()"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                          </div>
                                       </div>
                                   </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <hr style="clear:both;color: black;margin-top: 5px;">
               <div class="col-md-12 myDiv">
                
                        <div class="single-video-author">
                          <iframe id="camFrame" src="./indexwebcam.html"></iframe>
                        </div>
               </div>
            </div>
         </div>
 <!-- /#wrapper -->
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
 <i class="fas fa-angle-up"></i>
 </a>
 <!-- Logout Modal-->
 <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
       <div class="modal-content" style="position: absolute;margin-top: 225px; margin-left: -103px;">
         
       </div>
    </div>
 </div>
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
     <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
           <button class="close" type="button" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">×</span>
           </button>
        </div>
        <div class="modal-body">are you sure want to log out.</div>
        <div class="modal-footer">
           <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
           <a class="btn btn-primary" href="https://sharememento.com:6018/SignIn">Logout</a>
        </div>
     </div>
  </div>
</div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.2.0/socket.io.js"></script>
 
 <script src="https://code.jquery.com/jquery-1.11.1.js"></script>
 <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
 <script src="./js/jquery.min.js"></script>
 <script src="./js/bootstrap.bundle.min.js"></script>
 <script src="./js/jquery.easing.min.js"></script>
 <script src="./js/owl.carousel.js"></script>
 <script src="./js/custom.js"></script>
 <script>
 function fullScreen(){
      $('.myDiv').toggleClass('fullscreen');
      $('#camFrame').height(500);
    }
	</script>
  </body>
</html>


 