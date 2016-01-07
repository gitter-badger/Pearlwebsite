<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pearl</title>
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

<body data-spy="scroll" data-target="#navbar">

    <!-- Start Carousel -->
    <section class="header text-center" id="header">

        <div class="head">

            <div class="container">
                <div class="components">
                    <a href="#map">
                        <div class="comp text-center">
                            <i class="fa fa-map-marker fa-3x"></i>
                            <p>MAP</p>
                    </a>
                    </div>
                    <a href="#reservation">
                        <div class="comp text-center">
                            <i class="fa fa-pencil-square-o fa-3x"></i>
                            <p>Reserve Online</p>
                    </a>
                    </div>
                    <a href="#Reviews">
                        <div class="comp text-center">
                            <i class="fa fa-quote-left fa-3x"></i>
                            <p>Reviews</p>
                    </a>
                    </div>
                </div>


                <a data-scroll href="index.html#featuers"><i class="fa fa-angle-double-down fa-5x"></i></a>

            </div>
        </div>



    </section>

    <div class="social">
        <div class="container">
            <div class="media">
                <i class="fa fa-google-plus fa-lg"></i>
                <i class="fa fa-facebook fa-lg"></i>
                <i class="fa fa-twitter fa-lg"></i>
                <i class="fa fa-youtube fa-lg"></i>
            </div>



            <i class="fa fa-phone fa-lg"></i>
            <div class="phone">
                <p>010-000-000-00</p>

            </div>
        </div>
    </div>

    <!-- End Carousel -->

<!--

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display --
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>




            </div>

            <!-- Collect the nav links, forms, and other content for toggling --
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <a class="brand" href="#">
                    <!-- UNCOMMENT THE CSS VALUES TO TEST OTHER DIMENTIONS --
                    <!-- <img src="http://placehold.it/150x80&text=Logo" alt=""> --
                    <img src="images/pb.png" alt="">
                </a>
                <ul class="nav navbar-nav navbar-right">
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignIn">Sign in</a></li>
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignUp">New Client</a></li>
                </ul>



<!--
                </ul>
    <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="index.html#featuers">Room Facilities</a></li>
                    <li><a href="gallery.html" target="_blank">Photo Gallary</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                </ul>



            </div>
            <!-- /.navbar-collapse --
        </div>
        <!-- /.container-fluid --
    </nav>
    -->
    <!--
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display --
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="Images/pb.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling --
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="index.html">Home</a></li>
                    <li><a href="index.html#featuers">Room Facilities</a></li>
                    <li><a href="gallery.html" target="_blank">Photo Gallary</a></li>
                    <li><a href="#footer">Contact Us</a></li>
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignIn">Sign in</a></li>
                    <li text-center><a href="#" data-toggle="modal" data-target="#SignUp">New Client</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse --
        </div>
        <!-- /.container-fluid --
    </nav>-->

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
                <a class="navbar-brand" href="index.html"><img src="images/pb.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="index.html">Home</a></li>
                    <li><a href="index.html#featuers">Room Facilities</a></li>
                    <li><a href="gallery.html" target="_blank" >Photo Gallery</a></li>
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

    <section class="about-us text-center " >
   <div class="container">
      <h1  id="about" class="wow fadeInDown">Welcome To Pearl Hotel</h1>
       <div class="sexy_line wow fadeIn"></div>
      <p class="lead wow fadeInDown">Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
   
   <div class="features" id="featuers">
   <div class="row">
       
      <div class="grid">
					<figure class="effect-duke wow fadeInLeft">
						<img src="images/17.jpg" alt="img27"/>
						<figcaption>
							<h2>Pearl <span>Hotel</span></h2>
							<p>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo .</p>
							<a href="gallery.html" target="_blank">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-duke wow fadeInRight">
						<img src="images/17.jpg" alt="img17"/>
						<figcaption>
                            <h2>Pearl <span>Hotel</span></h2>
                            <p>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo .</p>
							<a href="gallery.html" target="_blank">View more</a>
						</figcaption>			
					</figure>
				</div>
       
             <div class="grid">
					<figure class="effect-duke wow fadeInLeft">
						<img src="images/17.jpg" alt="img27"/>
						<figcaption>
							<h2>Pearl <span>Hotel</span></h2>
							<p>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo .</p>
							<a href="gallery.html" target="_blank">View more</a>
						</figcaption>			
					</figure>
					<figure class="effect-duke wow fadeInRight">
						<img src="images/17.jpg" alt="img17"/>
						<figcaption>
							<h2>Pearl <span>Hotel</span></h2>
							<p>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo .</p>
							<a href="gallery.html" target="_blank">View more</a>
						</figcaption>			
					</figure>
				</div>
  
      </div>
      
      
   </div>
   </div>
   </div>
   </section>

    <!-------------------------------------------------------------------------------------------->


     <section class="testimonials text-center wow fadeInUpBig"  id="Reviews">
            <div class="testi">
                <h1 class="wow zoomIn" data-wow-delay="1s">Said About Us !!</h1>
                <div class="sexy_line1 wow zoomIn"></div>
            <!-- Start Container -->
         
            <div class="container">
                
                 
                <!-- Start Testimonials Carousel -->
                
                <div id="carousel_testimonials" class="carousel slide  wow zoomIn" data-wow-delay="1s" data-ride="carousel" >
                    
                  <div class="carousel-inner">
                    
                    <div class="item active wow zoomIn">
                        <p class="lead"><i class="fa fa-quote-left fa-2x"></i>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                    <div class="stars wow zoomIn">
                           
                           
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-o"></i>
                           <i class="fa fa-star-o"></i>
                         
                           
                           
                        </div>
                    
                    <div class="person text-center wow zoomIn">

                          <h4>-  "someone"  -</h4>
                          <h5>..17 Feb 2015..</h5>
                    </div>
                    </div>
                     
                    
                    
                    <div class="item">
                      <p class="lead"><i class="fa fa-quote-left fa-2x"></i>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                    <div class="stars wow zoomIn">
                           
                           
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-o"></i>
                           <i class="fa fa-star-o"></i>
                         
                           
                           
                        </div>
                    
                    <div class="person text-center wow zoomIn">
                          <h4>-  "someone"  -</h4>
                          <h5>..17 Feb 2015..</h5>
                    </div>
                    </div>
                    
                    <div class="item ">
                        <p class="lead"><i class="fa fa-quote-left fa-2x"></i>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                    <div class="stars">
                           
                           
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-o"></i>
                           <i class="fa fa-star-o"></i>
                         
                           
                           
                        </div>
                    
                    <div class="person text-center">
                          <h4>-  "someone"  -</h4>
                          <h5>..17 Feb 2015..</h5>
                    </div>
                        
                    </div>
                    
                    <div class="item">
                        <p class="lead"><i class="fa fa-quote-left fa-2x"></i>Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                    <div class="stars">
                           
                           
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                           <i class="fa fa-star"></i>
                             <i class="fa fa-star-half-o"></i>
                           <i class="fa fa-star-o"></i>
                         
                           
                           
                        </div>
                    
                    <div class="person text-center">
         
                          <h4>-  "someone"  -</h4>
                          <h5>..17 Feb 2015..</h5>
                    </div>
                    </div>
                    
                    
                  
                  </div>
                    
                    <a class="left carousel-control" href="#carousel_testimonials" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                   <a class="right carousel-control" href="#carousel_testimonials" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                  
                  
                </div>
        </div>
            </div>
            </section>
    <!-- End Testimonials Carousel -->



    <!--   ------------------------------------------------------------------>


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
                    <form role="form">
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
                                        <label>
                                            <input type="radio" name="optradio">Single Room</label>
                                    </div>

                                    <h6>WIFI + Air Conditioning</h6></td>
                                <td>
                                    <h5>US$ 50</h5></td>
                                <td>
                                    <h5>One Person</h5></td>
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
                                <td>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optradio">Double Room</label>
                                    </div>
                                    <h6>WIFI + Air Conditioning</h6></td>
                                <td>
                                    <h5>US$ 60</h5></td>
                                <td>
                                    <h5>Two Persons</h5></td>

                            </tr>

                            <tr class="danger">
                                <td>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optradio">Tribble Room</label>
                                    </div>
                                    <h6>WIFI + Air Conditioning</h6></td>
                                <td>
                                    <h5>US$ 70</h5></td>
                                <td>
                                    <h5>Three Persons</h5></td>

                            </tr>


                        </table>
                    </form>
                </div>
            </div>

            <a href="reservation-form.html" class="btn btn-info btn-lg" role="button" target=_blank>Continue Resevation</a>
        </div>



    </section>




    <section class="map text-center" id="map">

        <div class="main-map">
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Pearl+Hotel,+Maadi+Al+Khabiri+Ash+Sharqeyah,+Al+Maadi,+El+Cairo,+Egypt&amp;aq=0&amp;oq=pearl+hotel++el&amp;sll=37.0625,-95.677068&amp;sspn=27.838219,86.572266&amp;ie=UTF8&amp;ll=29.956706,31.259692&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe>
            <br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Pearl+Hotel,+Maadi+Al+Khabiri+Ash+Sharqeyah,+Al+Maadi,+El+Cairo,+Egypt&amp;aq=0&amp;oq=pearl+hotel++el&amp;sll=37.0625,-95.677068&amp;sspn=27.838219,86.572266&amp;ie=UTF8&amp;ll=29.956706,31.259692&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
        <div class="over-map">
            <p class="lead"> 22 ibrahim el sharqawy st.
                <br> from st '9'
                <br> Maadi,Cairo,Egypt
                <br>(three minutes walk from elmaadi metro)
                <br>
                <br>02-25125185
                <br>010-22554411 / 010-22554411</p>
            <br>
            <br>
            <h2>open<br>1 day aweek<br>24 hours a day
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
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/moment.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>

</body>
</html>