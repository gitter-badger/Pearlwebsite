<div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">LOGIN RIGHT HERE</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="signup" >

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" name="username" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" >
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" selected>Male </label>
                            <label><input type="radio" name="gender" >Female </label>
                        </div>
                    </div>
                    {{ Form::label('Birthday') }}<br>
                    {{ Form::selectRange('day', 1, 31) }}
                    {{ Form::selectMonth('month') }}
                    {{ Form::selectRange('year', 1946,2016) }}<br><br>
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="phone" name="phone" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Sign Up">
                </form>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="subsign" class="btn btn-primary">Sign up</button>
            </div> -->
            
        </div>
    </div>
</div>

