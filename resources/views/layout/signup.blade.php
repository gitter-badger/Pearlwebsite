<div class="modal fade" id="SignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">LOGIN RIGHT HERE</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="signup" >
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" name="username" ><br>
                        <label style="color:red;" id="userdanger" ></label> 

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" >
                        <label style="color:red;" id="emaildanger" ></label>
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="male" selected>Male </label>
                            <label><input type="radio" name="gender" value="female" >Female </label>
                            <label style="color:red;" id="genderdanger" ></label>
                        </div>
                    </div>
                    {{ Form::label('Birthday') }}<br>
                    {{ Form::selectRange('day', 1, 31) }}
                    {{ Form::selectMonth('month') }}
                    {{ Form::selectRange('year', 1946,2016) }}<br><br>
                    
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="phone" name="phone" >
                        <label style="color:red;" id="phonedanger" ></label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <label style="color:red;" id="passworddanger" ></label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                         <label style="color:red;" id="confirmdanger" ></label> 

                    </div>
                    <input type="submit" class="btn btn-primary" value="Sign Up">
                    <label style="color:green;" id="subsucc" ></label>
                </form>
            </div>

           <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>-->`
        </div>
    </div>
</div>

