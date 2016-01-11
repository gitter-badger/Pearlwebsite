 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">
        <li class=""><a href="/">Home</a></li>
        <li><a href="/#featuers">Room Facilities</a></li>
        <li><a href="gallery" target="_blank">Photo Gallery</a></li>
        <li><a href="#footer">Contact Us</a></li>
        
        @if(session_status() == PHP_SESSION_NONE)
            <?php session_start(); ?>
        @endif
        @if(!isset($_SESSION['logged_state']))
        <li text-center><a href="#" data-toggle="modal" data-target="#SignIn">Sign in</a></li>
        <li text-center><a href="#" data-toggle="modal" data-target="#SignUp">New Client</a></li>
        @else
            <li text-center id="prof"><a href="profile" >{{ $_SESSION['username'] }}</a></li>
            <li text-center id="logout" ><a href="#" data-toggle="modal">Logout</a></li>
        @endif
    </ul>

</div>