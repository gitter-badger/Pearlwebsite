<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Manager Profile</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/normalize.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">

   <link rel="stylesheet" href="css/user-profile-style.css" type="text/css">
       <link rel="icon" href="images/pb.png">

   <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
   <![endif]-->
    
</head>

<body>
  

   
   
 
                 <!--Sign in -->
                @include('layout.signin')
<!-- signin end -->
<!--Sign Up -->
               @include('layout.signup')
<!--Sign Up end -->

 <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="images/pb.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="/">Home</a></li>
                    <li><a href="/#featuers">Room Facilities</a></li>
                    <li><a href="gallery" target="_blank">Photo Gallary</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignIn">Sign in</a></li>
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignUp">New Client</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   
<!--   -------------------------------------------------------------->
   <section class="user-profile text-center">
      <div class="opacity">
        <div class="container">
            <div class="row">
                <div class="board">
                    <!-- <h2>Welcome to IGHALO!<sup>�</sup></h2>-->
                    <div class="board-inner">
                    <ul class="nav nav-tabs" id="myTab">
                    <div class="liner"></div>
                     <li>
                     <a href="#profile" data-toggle="tab" title="Admin Profile">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-user"></i>
                      </span> 
                  </a></li>

                  <li><a href="#edit-pro" data-toggle="tab" title="Edit Admin Profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-wrench"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#search" data-toggle="tab" title="Search For User">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-search"></i>
                     </span> </a>
                     </li>

                     <li><a href="#add" data-toggle="tab" title="Add Customer">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-plus-sign"></i>
                         </span> 
                     </a></li>

                     <li><a href="#remove" data-toggle="tab" title="Remove Customer">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-remove-sign"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                     
                      
                      
                      <div class="tab-pane fade in active" id="profile">
                        <h2>Your Profile</h2>
                        <div class="profile-content">
                        <div class="pro-header text-left">
                           <img src="images/person.png" class="img-thumbnail">
                                          <div class="main-info">
                                             <p>Hello Manager</p>
                                 <p>Name : mohamed ibrahim </p>
                                 <p>Phone : 01142513823 </p>
                                 <p>Email : M7md.fcih@gmail.com </p>
                                 <p>Egypt</p>
                                 <button class="btn btn-info btn-sm">Change Photo</button>
                                       
                            </div>          
                        </div>
                 
                      </div>
                      </div>                      
                      
                      <div class="tab-pane fade" id="edit-pro">
                         
                          
               <div class="edit-profile">
            <h2>Edit profile data :</h2>
            <div class="update">
            <form role="form">
               <div class="form-group">
                  <label for="usr"> Update Phone:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm Phone:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
               
               <div class="form-group">
                  <label for="usr"> Update E-mail:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm E-mail:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
                              <div class="clearfix"></div>

               <button class="btn-warning btn-sm" id="confirm">Confirm</button>

            </form>
            
            </div>
            
            </div>
      <div class="edit-Password">
         <h2>Update Password :</h2>
            <div class="update">
            <form role="form">
                <div class="form-group">
                  <label for="usr"> Your UserName:</label>
                  <input type="text" class="form-control" id="usr">
               </div>
               
               
               
               <div class="form-group">
                  <label for="usr"> Old Password:</label>
                  <input type="password" class="form-control" id="pwd">
               </div>
               
               <div class="form-group">
                  <label for="usr"> New Password:</label>
                  <input type="password" class="form-control" id="pwd">
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm New Password:</label>
                  <input type="password" class="form-control" id="pwd">
               </div>
               
                             <div class="clearfix"></div>

               
               <button class="btn-warning btn-sm" id="confirm">Confirm Password</button>

            </form>
            
         
         
         
      </div>
            
            </div>
            
                      </div>
                      
                      
                      <div class="tab-pane fade" id="search">
                          <h2>Search for User</h2>
                          <div class="search-cont">
                              <p class="lead">
                                  Please Enter Customer's Email To Find Him
                              </p>
                                        
                  <form role="form">
                  <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                </div>
                  </form>
            <div class="search-result">
            </div>
               
            </div>
                      </div>
                      
                      <div class="tab-pane fade add-user" id="add">
                       
               <h2>Add User</h2>
               
               <form role="form" class="manager-form">
                <div class="form-group" id="us-info">
            <label for="sel1">User Type:</label>
            <select class="form-control" id="sel1">
              <option>Admin</option>
              <option>Receptionist</option>
            </select>
            </div>
                
               <div class="form-group" id="us-info">
               <label for="usr"> First Name:</label>
               <input type="text" class="form-control" id="usr" required>
             </div>
               
            <div class="form-group" id="us-info">
               <label for="pwd">last name:</label>
               <input type="text" class="form-control" required>
             </div>
            
            
            <div class="form-group" id="use-info">
               <label for="pwd">Email Address:</label>
               <input type="email" class="form-control" required>
            </div>
            
            <div class="form-group" id="use-info">
               <label >Confirm Email:</label>
               <input type="email" class="form-control" required>
            </div>
             
             <div class="form-group" id="use-info">
               <label>Phone Number: </label>
               <input type="text" class="form-control" required>
            </div>
            
            <div class="form-group" id="use-info">
               <label for="pwd">Other Phone Number: </label>
               <input type="text" class="form-control">
            </div>
            
            <div class="form-group" id="use-info">
            <label for="pwd">password:</label>
            <input type="password" class="form-control" id="pwd" required>
            </div>
            
            <div class="form-group" id="use-info">
            <label for="pwd">Confirm password:</label>
            <input type="password" class="form-control" id="pwd" required>
          </div>
               
            
                   <input type="submit" class="btn-primary btn-lg btn-block" value="confirm">

               
               </form>
                      
                     </div>
                      <div class="tab-pane fade remove-user" id="remove">
                        
            <h2>Delete User</h2>
                         <div class="delete">
                             <h3>Enter The Username You Want To Delete</h3>
            <form role="form" method="post" action="">
                <div class="form-group">
                  
                    <input type="email" class="form-control" placeholder="Username" name="email">

                </div>
                
                <input class="btn btn-danger btn-sm" type="submit" name="submit" value="Delete">

            </form>
            
            
          </div>
                      
                     </div>

</div>
<div class="clearfix"></div>
</div>

</div>
</div>
</div>
      
</section>
                   
                
<!----------------------------------------------------------------------------------->
 <section class="footer" id="footer">
            <div class="container">
                <div class="row">
                    
                    
                    <!-- site map -->
                    @include('layout.sitemap')
                    <!-- site map end -->
                    
                    
                    <div class="col-lg-5">
                     
                        <h3>Weather Forecast</h3>
                        <div class="weather">
<a href="http://www.accuweather.com/en/eg/cairo/127164/weather-forecast/127164" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather�s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather�s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1427576818279" class="aw-widget-current"  data-locationkey="127164" data-unit="f" data-language="en-us" data-useip="false" data-uid="awcc1427576818279"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                    </div>
                    </div>
                    

                     <div class="col-lg-4">
                        <h3>Keep In Touch</h3>
                        <form role="form">
                            
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control input-md" placeholder="Cell Phone">
                                </div>
                            
                                <div class="form-group">
                                    <textarea class="form-control input-md" placeholder="Your Message"></textarea>
                                </div>
                                <button type="button" class="btn btn-danger btn-md btn-block">Contact Us</button>
                           
                        </form>
                    </div>
                    
                </div>
            </div>
            <div class="copyright text-center">
                <div class="container-fluid">
                <div class="pearl col-md-6 col-sm-6 col-xs-12">
                All Rights Reserved &copy <span><img src="images/logo.png" width="50"></span>
                </div>
                <div class="aptware col-md-6 col-sm-6 col-xs-12">
                Designed and Developed By &trade;<span><a href="http://www.apt-ware.com" target="_blank"><img src="images/Aptware.png" width="80"></a></span>
                </div>
                    </div>
            </div>
        </section>
   




<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/moment.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</body>
</html>
