<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Edit Reservation</title>
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
   
   
   
     <section class="reservation" id="reservation">
   
 
        
   <div class="container text-center">
   <div class="row">
      
     
      
      
       <div class="col-md-8">
         
         
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
           <option>1</option>
           <option>2</option>
           <option>3</option>
           <option>4</option>
         </select>
          </div>
         </form>
       </div>
      </div>
   
       <div class="col-md-4">
         
         <button class="btn-primary btn-sm">Check Availability</button>
   
       </div>
       
   </div>
      
      <div class="row">
       <div class="col-md-12">  
       <table class="table  text-center">
         <tr class="info">
            <th> Room Type</th>
             <th>Today's Price</th>
             <th>Max</th>
            <th>NR.Rooms</th>
            
         </tr>
         
         <tr class="danger">
           
            <td><h5> Single room</h5><h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 50</h5></td>
            <td><h5>One Person</h5></td>
            <td>
               
                <form role="form">
                  <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div>
                </form>
               
            </td>
         </tr>
         
         <tr class="warning">
            <td><h5>Douple Room</h5><h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 60</h5></td>
            <td><h5>Two Persons</h5></td>
            <td>
               
               <form role="form">
                  <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div>
                </form>
               
            </td>
         </tr>
         
         <tr class="danger">
            <td><h5>Tribble Room</h5><h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 70</h5></td>
            <td><h5>Three Persons</h5></td>
            <td>
               
               <form role="form">
                  <div class="form-group">
                  <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div>
                </form>
               
            </td>
         </tr>
         
         
      </table>
       
       </div>
   </div>
      
<button class="btn btn-danger btn-lg" role="button" data-toggle="modal" data-target="#myModal3">cancel Resevation</button>
<button class="btn btn-success btn-lg" role="button">Update Resevation</button>


<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Enter your Password to cancil Reservation!!</h4>
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
        <button type="button" class="btn btn-primary">Cancil Reservation</button>
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
   




<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/signupAction.js"></script>
<script src="js/action.js"></script>
<script src="js/plugins.js"></script>
<script src="js/moment.js"></script>


</body>
</html>
