<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Profile</title>

  <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css"> 
<link rel="stylesheet" href="{{ asset('/css/normalize.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}" type="text/css">

<link rel="stylesheet" href="{{asset('/css/font-awesome.min.css')}}" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/user-profile-style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('/css/media.css') }}" type="text/css">
<link rel="icon" href="{{ asset('/images/pb.png') }}">

   
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
                <a class="navbar-brand" href="/"><img src="{{ asset('/images/pb.png') }}"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            @include('layout.menu')
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
                    <!--
                    <li >
                        <a href="#home" data-toggle="tab" title="welcome">
                            <span class="round-tabs one">
                            <i class="glyphicon glyphicon-home"></i>
                            </span>
                       </a>  
                    </li>
                    -->
                    
                 <li 
                     class="active"
                     ><a href="#profile" data-toggle="tab" title="profile" >
                     <span class="round-tabs two">
                         <i class="glyphicon glyphicon-user"></i>
                     </span> 
                     </a>
                 </li>
                    
                    @if(isset($same_user))
                 <li><a href="#edit-pro" data-toggle="tab" title="Edit Profile">
                     <span class="round-tabs three">
                          <i class="glyphicon glyphicon-wrench"></i>
                     </span> </a>
                     </li>
                        @endif
                        
                       @if(isset($same_user))
                     <li><a href="#edit-res" data-toggle="tab" title="Edit Reservation">
                         <span class="round-tabs four">
                              <i class="glyphicon glyphicon-registration-mark"></i>
                         </span> 
                     </a></li>
                       @endif
                       @if(isset($same_user))
                       <!--
                     <li><a href="#thanks" data-toggle="tab" title="Thanks">
                         <span class="round-tabs five">
                              <i class="glyphicon glyphicon-ok"></i>
                         </span> </a>
                     </li> -->
                     @endif
                     </ul></div>

                     <div class="tab-content">
                       <!--
                      <div class="tab-pane fade  " id="home">

                          <h1> Welcome To Pearl Hotel </h1>
                          <p class="lead">Hello Guest ..Pearl Hotel Is a 3-Stars Hotel At EL Ma'ady District , The Queitest Place In Cairo , In Pearl Hotel You Can Have A Queit,Restful And Luxary Time</p>
                          <a href="/" class="btn btn-danger btn-lg">Pearl Hotel</a>

                      </div >-->
                      
                      
                      <div class="tab-pane fade in active" id="profile">
                        <h2>Your Profile</h2>
                        <div class="profile-content">
                        <div class="pro-header text-left">
                           <img src="{{ asset('/images/person.png') }}" class="img-thumbnail">
                                          <div class="main-info">
                                 <p>Name : {{   $username }} </p>
                                 <p>Phone : {{ $phone }} </p>
                                 <p>Email : {{ $email }}  </p>
                                 <button class="btn btn-info btn-sm">Change Photo</button>
                                       
                            </div>          
                        </div>
                        
                 @if(isset($same_user))
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
                 @endif
                      </div>
                      </div>                      
            @if(isset($same_user))  
            <div class="tab-pane fade" id="edit-pro">        
            <div class="edit-profile">
            <h2>Edit profile data :</h2>
            <div class="update">
             <!--   <form  id="uppe">
               <div class="form-group">
                  <label for="usr"> Update Phone:</label>
                  <input type="text" class="form-control" name="fo1" id="newphone">
                      <label id="pp" style="color: red"></label>
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm Phone:</label>
                  <input type="text" class="form-control" name="fo2" id="conphone">
                      <label id="cc" style="color: red"></label>
               </div>
               
               <div class="form-group">
                  <label for="usr"> Update E-mail:</label>
                  <input type="text" class="form-control" name="em1" id="newemail">
                      <label id="gg" style="color: red"></label>
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm E-mail:</label>
                  <input type="text" class="form-control" name="em2" id="conemail">
                      <label id="ee" style="color: red"></label>
               </div>
               <div class="clearfix"></div>
               <input  type="submit" class="btn-warning btn-sm"  value="Confirm"></input>
               <br/>
                    <label id="ng" style="color: green"></label>
            </form>
            
            </div>
            
            </div>
      <div class="edit-Password">
         <h2>Update Password :</h2>
            <div class="update">
                <form  id="uppas">
               
               
               <div class="form-group">
                  <label for="usr"> New Password:</label>
                  <input type="password" class="form-control"  name="nepas"id="newpass">
                      <label id="ww" style="color: red"></label>
               </div>
               
               <div class="form-group">
                  <label for="usr"> Confirm New Password:</label>
                  <input type="password" class="form-control"  name="copas"id="conpass">
                      <label id="aa" style="color: red"></label>
               </div>
               
                             <div class="clearfix"></div>

               
                             <input  type="submit" class="btn-warning btn-sm"  value="Confirm">
                                 <br/>
                                 <label id="ns" style="color: green"></label>

            </form>-->
             @include('layout.update')
            
         
         
         
      </div>
            
            </div>
            
                      </div>
                      @endif
            @if(isset($same_user))
            <div class="tab-pane fade" id="edit-res">
                         
            <h2>Edit Your Reservation</h2>
            <div class="reserve text-left">
            <div class="form-group">
       <h5>check in date:</h5>
        {{ Form::selectRange('chday', 1, 31 , null,['class' => 'form-control','id'=>'ciday']) }}
        @inject('form' , 'App\ourclass\formaction')
       {{ $form->show_MY('chmonth','cimonth') }} <!-- id , name -->
          </div>
       </div>
         
        <div class="reserve text-left">
         <form role="form">
         <div class="form-group">
       <h5>check out date:</h5>
      {{ Form::selectRange('cday',1,31,null,['class'=>'form-control','id'=>'coday']) }}
      {{ $form->show_MY('comonth','comonth') }} 
          </div>
         </form>
            <button id="checkava" class="btn btn-sm btn-danger">Check Availability</button>
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
            <td rowspan="1">
              
                  <div class="form-group">
                  {{ Form::text('text', 0 , ['id' => 'sr']) }}
                 <!-- <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div> -->
               
               
            </td>
         </tr>
         
         <tr class="danger">
            <td><div class="radio">
              <label><input type="radio" name="optradio">Double Room</label>
               </div>
                <h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 60</h5></td>
            <td><h5>Two Persons</h5></td>
            <td rowspan="1">
              
                  <div class="form-group">
                  {{ Form::text('text', 0 , ['id' => 'sd']) }}
                 <!-- <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div> -->
               
               
            </td>
         </tr>
         
         <tr class="danger">
            <td><div class="radio">
              <label><input type="radio" name="optradio">Tribble Room</label>
               </div>
                <h6>WIFI + Air Conditioning</h6></td>
            <td><h5>US$ 70</h5></td>
            <td><h5>Three Persons</h5></td>
            <td rowspan="1">
              
                  <div class="form-group">
                  {{ Form::text('text', 0 , ['id' => 'st']) }}
                 <!-- <select class="form-control" id="sel1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                  </div> -->
               
               
            </td>
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
                      @endif
                      
                      @if(isset($same_user))
                      <!--
                      <div class="tab-pane fade" id="thanks">
                        <h2>Thank You</h2>
                      <h3>Thanks For Visiting Our Hotel .. We Hope You Have A nice Time With Us</h3>
                     </div> -->
                      @endif
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
                    

                     <!-- contact start -->
                     @include('layout.contact')
                    <!-- contact end here -->
                    
                </div>
            </div>
            <div class="copyright text-center">
                <div class="container-fluid">
                <div class="pearl col-md-6 col-sm-6 col-xs-12">
                All Rights Reserved &copy <span><img src="{{ asset('/images/logo.png') }}" width="50"></span>
                </div>
                <div class="aptware col-md-6 col-sm-6 col-xs-12">
                Designed and Developed By &trade;<span><a href="http://www.apt-ware.com" target="_blank"><img src="{{ asset('images/Aptware.png') }}" width="80"></a></span>
                </div>
                    </div>
            </div>
        </section>
   




<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/signupAction.js') }}"></script>
<script src="{{ asset('js/action.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/moment.js') }}"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


</body>
</html>
