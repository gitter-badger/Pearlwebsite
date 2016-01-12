<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Confirm Reservation</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <link rel="icon" href="images/pb.png">
 
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!=====================================================================================================================================================================================================================================================-->
<!---------- start confirm reservation ---------->
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
            @include('layout.menu')
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
 <section class="confirm_reservation" >
  
  <div class="container"> <!----------  start container ---------->
  
   <div class="sec_name text-center">
    <h1>Confirm Reservation</h1>
    <div class="sexy_line"></div>
   </div>
   
   <div class="row">  <!----------  start row ---------->
   
  <div class=" msg_confirm col-md-12 col-xs-12 ">
      @if(session_status() == PHP_SESSION_NONE)
            <?php session_start(); ?>
        @endif
        @if(!isset($_SESSION['logged_state']))
             <?php session_start();?>
        @else
    <p>We are ready to confirm your reservation. please review the reservation details below.</p>
    <p>Reserved as : <span><?php echo $_SESSION['username']; ?></span> <a>( not FIRSTNAME? Click here to change the user)</a></p>
   </div>
    <div class="col-md-7 col-xs-12 ">
    <div class=" msg_confirm" >
    <p>Email address : <span><?php echo $_SESSION['email']; ?></span></p>
    <p>Phone number : <span><?php echo $_SESSION['phone']; ?></span></p>
    </div>
        @endif
        @if(session_status() == PHP_SESSION_NONE)
            <?php session_start(); ?>
        @endif
        @if(!isset($_SESSION['logged_state']))
             <?php session_start();?>
        @else 
    <table class="table confirm_info text-center">  <!----------  start first table  ---------->
         <tr class="info">
            <th> Room Type</th>
             <th>Number</th>
             <th>Price/Night</th>
             <th>Nights</th>
            <th>Total</th>
         </tr>
         <tr class="danger">
            <td><p>Single Room</p></td>
            <td><p><?php echo $_SESSION['val1'] ?></p></td>
            <td><p>50 $</p></td>
            <td><p><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['all_days'];
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['inwit'];  
            }
            
                ?></p></td>
            <td><p><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['tot'];
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['to'];  
            }
            
                ?></p></td>
         </tr>
         
         <tr class="danger">
            <td><p>Double Room</p></td>
            <td><p><?php echo $_SESSION['val2'] ?></p></td>
            <td><p>60 $</p></td>
            <td><p><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['all_days'];
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['inwit'];  
            }
            
                ?></p></td>
            <td><p><?php if($_SESSION['lock'] == 1 )
            {
                  $_SESSION['tot2'];
                
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['to2'];  
            }
            
                ?></p></td>
         </tr>
            
          <tr class="danger">
            <td>Third-Room</td>
            <td><?php echo $_SESSION['val3']?></td>
            <td>70 $</td>
            <td><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['all_days'];
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['inwit'];  
            }
            
                ?></td>
           
            <td><strong><p><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['tot3'];
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['to3'];  
            }
            
                ?></p></strong></td>
         </tr>
   </table> 
        @endif<!----------  end first table  ---------->
</div>
   <div class="pyment_info col-md-5 col-xs-12 ">
      <table class="table "> <!----------  start second table  ---------->
      
         <tr class="info  text-center">
            <th>Payment Info</th>
         </tr>
         <tr class="danger">
           <td>
            <div class="col-md-5 col-xs-4"> 
             <h6>Card Type</h6>
             <h6>Card Number</h6>
             <h6>Card Expiration</h6>
             <h6>CW2 Code</h6>
            </div>
            
            <div class="col-md-7 col-xs-8">
            <p>
               <div class="form-group col-md-6 col-xs-5">
                  <select class="form-control form_margin" id="sel1">
                    <option>Visa</option>
                    <option>Paypal</option>
                    <option>visa</option>
                 </select>
               </div>
               <div class="image col-md-2 col-xs-1">
                <img src="images/64_64_visa.png" />
               </div>
               <div class="image col-md-2 col-xs-1">
                <img src="images/64_64_mastercard.png"/>
               </div>
               <div class="image col-md-2 col-xs-1">
                <img src="images/64_64_paypal.png" />
               </div>
            </p>
              
              <p>
               <div class="form-group">
                  <input type="text" class="form-control input-md" placeholder="Card Number">
               </div>
              </p>
              <p>
               <div class="form-group col-md-6 col-xs-6">
                  <select class="form-control form_margin" id="sel1">
                    <option>Month</option>
                 </select>
               </div>
               
                  <div class="form-group col-md-6 col-xs-6">
                  <select class="form-control" id="sel1">
                    <option>Year</option>
                 </select>
               </div>
              </p>
              <p>
               <div class="form-group">
                    <input type="text" class="form-control input-md" placeholder="Code">
               </div>
             </p>
            </div>
           </td>
        </tr>
      </table> <!----------  end second table  ---------->
  </div>
   
   </div>
    <div class="taxes col-xs-12 ">
    <p><strong>Taxes (7%):</strong> 630 L.E</p>
    <p><strong>Total :</strong> <span><?php if($_SESSION['lock'] == 1 )
            {
            echo  $_SESSION['all_tot']+78.75 ;
            }
            else if($_SESSION['lock'] == 0)
            {
                echo $_SESSION['all_to'] +78.75;  
            }
            
                ?></span> </p>
   </div>
    <div class="button text-center">
      <div class="btn btn-danger">Cancel</div>
      <div class="btn btn-info">Confirm</div>
     </div>  <!---------- end row  ---------->
  </div> <!---------- end container ---------->
</section> 
<!---------- end confirm reservation ---------->
<!=====================================================================================================================================================================================================================================================-->
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
                    
                   <!-- contact start -->
                     @include('layout.contact')
                    <!-- contact end here -->
                    
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



<!-------script-------->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
 <script src="js/signupAction.js"></script>
 <script src="js/action.js"></script>
<script src="js/plugins.js"></script>
<script src="js/moment.js"></script>
<script src="js/smooth-scroll.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>


    <script>new WOW().init();</script>
</body>
</html>
