<div class="col-lg-4">
    <h3>Keep In Touch</h3>
    <form  id="cont-form">

            <div class="form-group">
                <input type="text" class="form-control input-md" placeholder="Username">
            </div>
            @if(session_status() == PHP_SESSION_NONE)
            <?php session_start(); ?>
            @endif
            @if(!isset($_SESSION['logged_state']))
            <div class="form-group">
                <input type="text" class="form-control input-md" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control input-md" placeholder="Cell Phone">
            </div>
            @endif
            <div class="form-group">
                <textarea class="form-control input-md" placeholder="Your Message"></textarea>
            </div>
            <!-- <button type="button" class="btn btn-danger btn-md btn-block">Contact Us</button> -->
            <input type="submit" class="btn btn-danger btn-md btn-block" value="Contact Us" >

    </form>
</div>