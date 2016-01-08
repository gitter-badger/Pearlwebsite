<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Photo Gallery</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/normalize.css" type="text/css">

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="css/profile-style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">

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

    <!------------------------------------------------------------------------->
<section class="gallery text-center">
   <div class="p-g">
      <h1>Photo Gallery</h1>
   <div class="container">
      
      <div role="tabpanel" class="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#Single" aria-controls="home" role="tab" data-toggle="tab" class="tab">Single Rooms</a></li>
    <li role="presentation"><a href="#Double" aria-controls="profile" role="tab" data-toggle="tab" class="tab">Double Rooms</a></li>
    <li role="presentation"><a href="#Tribble" aria-controls="messages" role="tab" data-toggle="tab" class="tab">Tribble Room</a></li>
    <li role="presentation"><a href="#Sweet" aria-controls="settings" role="tab" data-toggle="tab" class="tab">Sweet</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="Single">
      
      
   
     <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
 <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    
    
</div>

<div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">X</button>
        <div class="modal-content">
            <div class="modal-body">
                <img src="" alt="" />
            </div>
        </div>
    </div>



    </div>
    <div role="tabpanel" class="tab-pane" id="Double">
       <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Tribble">
       <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    
        <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="Sweet">
       <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    <div class="col-xs-6 col-sm-3">
        <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
            <img src="images/image.jpg" alt="...">
        </a>
    </div>
    </div>
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
By accessing and/or using this code snippet, you agree to AccuWeather?s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather?s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
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
<script src="js/signupAction.js"></script>
<script src="js/plugins.js"></script>




</body>
</html>
