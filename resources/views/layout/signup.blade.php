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
                        <input type="text" class="form-control" placeholder="username" name="username" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radio">
                            <label><input type="radio" name="gender" selected>Male </label>
                            <label><input type="radio" name="gender" >Female </label>
                        </div>
                    </div>
                    {{ Form::label('Birthday') }}<br>
                    {{ Form::selectRange('number', 1, 31) }}
                    {{ Form::selectMonth('month') }}
                    {{ Form::selectRange('number', 1946,2016) }}<br><br>
                    
                    
                    <!--
                    <select class="form-control" id="sel1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                      </select> -->
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="phone">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                    </div>
                </form>
            </div>
           <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>-->`
        </div>
    </div>
</div>

