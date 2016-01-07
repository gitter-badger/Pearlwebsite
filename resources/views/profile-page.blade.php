<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
   <link rel="stylesheet" href="css/normalize.css" type="text/css">
   <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css" type="text/css">
   <link rel="stylesheet" href="css/user-profile-style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">
    <link rel="icon" href="images/pb.png">

   
   <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
   <![endif]-->
    
</head>

<body>
  

   
   
                 <!--Sign in -->
                <div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">LOGIN RIGHT HERE</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="username">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Remember Me</label>
                                    </div>

                                    <a href="#">Forget Password</a>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </div>
<!--Sign Up -->
                <div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">LOGIN RIGHT HERE</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">

                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Re-Password">
                                    </div>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Creat</button>
                            </div>
                        </div>
                    </div>
                </div>

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
                <a class="navbar-brand" href="index.html"><img src="Images/pb.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="index.html">Home</a></li>
                    <li><a href="index.html#featuers">Room Facilities</a></li>
                    <li><a href="gallery.html" target="_blank">Photo Gallary</a></li>
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
                     <li class="active">
                     <a href="#home" data-toggle="tab" title="welcome">
                      <span class="round-tabs one">
                              <i class="glyphicon glyphicon-home"></i>
                      </span> 
                  </a></li>

                  <li><a href="#profile" data-toggle="tab" title="profile">
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span> 
           </a>
                 </li>
                 <li><a href="#edit-pro" data-toggle="tab" title="Edit Profile">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-wrench"></i>
                     </span> </a>
                     </li>

                     <li><a href="#edit-res" data-toggle="tab" title="Edit Reservation">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-registration-mark"></i>
                         </span> 
                     </a></li>

                     <li><a href="#thanks" data-toggle="tab" title="Thanks">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li>
                     
                     </ul></div>

                     <div class="tab-content">
                      <div class="tab-pane fade in active" id="home">

                          <h1> Welcome To Pearl Hotel </h1>
                          <p class="lead">Hello Guest ..Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                        <button class="btn btn-danger btn-lg">Pearl Hotel</button>

                      </div>
                      
                      
                      <div class="tab-pane fade" id="profile">
                        <h2>Your Profile</h2>
                        <div class="profile-content">
                        <div class="pro-header text-left">
                           <img src="images/person.png" class="img-thumbnail">
                                          <div class="main-info">
                                             <p>Hello Guest</p>
                                 <p>Name : mohamed ibrahim </p>
                                 <p>Phone : 01142513823 </p>
                                 <p>Email : M7md.fcih@gmail.com </p>
                                 <p>Egypt</p>
                                 <button class="btn btn-info btn-sm">Change Photo</button>
                                       
                            </div>          
                        </div>
                        
                        <div class="user-table">
                           
                <table class="table">
                   <th colspan="2" class=warning>Booking Data</th>
               
                   
                   <tr class=danger>
                     <td> check-in</td>
                     <td> 20/3/2015</td>
                   </tr>
                   
                   
                   <tr class="info" >
                     <td> check-out</td>
                     <td> 30/3/2015</td>
                   </tr>
                   
                    <tr  class=danger>
                     <td> num of days</td>
                     <td> 5 dayes</td>
                   </tr>
                    
                     <tr class="info">
                     <td> num of rooms</td>
                     <td> 3 rooms</td>
                   </tr>
                     
                  <tr class="danger">
                     <td> room type</td>
                     <td> single</td>
                   </tr>
                      
                       <tr class="info">
                     <td> payment method</td>
                     <td> visa</td>
                   </tr>
                </table>
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
                      
                      
                      <div class="tab-pane fade" id="edit-res">
                         
                         <h2>Edit Your Reservation</h2>
                          <div class="reserve text-left">
         <div class="form-group">
       <h5>check in date:</h5>
      
         <select class="form-control" id="sel1">
           <option selected="selected">day</option>
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           <option>6</option>
           <option>7</option>
           <option>8</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           <option>13</option>
           <option>14</option>
           <option>15</option>
           <option>16</option>
           <option>17</option>
           <option>18</option>
           <option>19</option>
           <option>20</option>
           <option>21</option>
           <option>22</option>
           <option>23</option>
           <option>24</option>
           <option>24</option>
           <option>26</option>
           <option>27</option>
           <option>28</option>
           <option>29</option>
           <option>30</option>
           <option>31</option>
           

         </select>
         
          <select class="form-control" id="sel1">
           <option selected="selected">M/y</option>
           <option>JAn 2015</option>
           <option>Feb 2015</option>
           <option> Mar 2015</option>
           <option>Apr 2015</option>
         </select>
          </div>
       </div>
         
         
        <div class="reserve text-left">
         <form role="form">
         <div class="form-group">
       <h5>check out date:</h5>
      
         <select class="form-control" id="sel1" >
             <option selected="selected">day</option>
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
           <option>5</option>
           <option>6</option>
           <option>7</option>
           <option>8</option>
           <option>10</option>
           <option>11</option>
           <option>12</option>
           <option>13</option>
           <option>14</option>
           <option>15</option>
           <option>16</option>
           <option>17</option>
           <option>18</option>
           <option>19</option>
           <option>20</option>
           <option>21</option>
           <option>22</option>
           <option>23</option>
           <option>24</option>
           <option>24</option>
           <option>26</option>
           <option>27</option>
           <option>28</option>
           <option>29</option>
           <option>30</option>
           <option>31</option>
         </select>
         
          <select class="form-control" id="sel1">
             <option selected="selected">M/y</option>
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
         </select>
          </div>
         </form>
         <button class="btn btn-sm btn-danger">Check Availability</button>
       </div>
      
        <table class="table  text-center">
         <tr class="info">
            <th> Room Type</th>
             <th>Today's Price</th>
             <th>Max</th>
            <th>NR.Rooms</th>
            
         </tr>
         
         <tr class="danger">
           
            <td>
              <div class="radio">
              <label><input type="radio" name="optradio">Single Room</label>
               </div>
                
               <h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 50</h5></td>
            <td><h5>One Person</h5></td>
            <td rowspan="3">
              
                  <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div>
               
               
            </td>
         </tr>
         
         <tr class="danger">
            <td><div class="radio">
              <label><input type="radio" name="optradio">Double Room</label>
               </div>
                <h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 60</h5></td>
            <td><h5>Two Persons</h5></td>
            
         </tr>
         
         <tr class="danger">
            <td><div class="radio">
              <label><input type="radio" name="optradio">Tribble Room</label>
               </div>
                <h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 70</h5></td>
            <td><h5>Three Persons</h5></td>
            
         </tr>
         
         
      </table>
      
<button class="btn btn-danger btn-lg" role="button" data-toggle="modal" data-target="#myModal3">cancel Resevation</button>
<button class="btn btn-success btn-lg" role="button">Update Resevation</button>


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter your Password to cancel Reservation!!</h4>
      </div>
      <div class="modal-body">
        <form role="form">
                            
                                
                                    <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                              

      
                        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Cancel Reservation</button>
      </div>
    </div>
  </div>
</div>
                      </div>
                      <div class="tab-pane fade" id="thanks">
                        <h2>Thank You</h2>
                      <h3>Thanks For Visiting Our Hotel .. We Hope You Have A nice Time With Us</h3>
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
                    
                    
                    <div class="col-lg-3 col-md-6">
                        <h3>sitemap</h3>
                        <ul class="list-unstyled">
                            <a href="index.html"><li>Home</li></a>
                            <a href="index.html#about"><li>About us</li></a>
                            <a href="index.html#featuers"><li>Room Facilities</li></a>
                            <a href="gallery.html"><li>Photo Gallery</li></a>
                            <a href="index.html#reservation"><li>Reserve Online</li></a>
                            <a href="index.html#Reviews"><li>Reviews</li></a>
                            <a href="index.html#map"><li>Map</li></a>
                        </ul>
                    </div>
                    
                    
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
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</body>
</html>
