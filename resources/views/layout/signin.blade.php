<div class="modal fade" id="SignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">LOGIN RIGHT HERE</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <input type="text" id="wq" name="name" class="form-control" placeholder="username">
                                        <label id="we-danger" style="color: red"></label>
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="bq" name="pass" class="form-control" placeholder="Password">
                                        <label id="be-danger" style="color: red"></label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ks"  id="kk" check="checked" value="1"> Remember me </label> 
                                    </div>

                                    <a href="#">Forget Password</a><br> <br>
                                     <label id="signin-danger" style="color: red"></label>
                                     <label id="signin-succ" style="color: green"></label>
                                     <center ><label id="signin-faild" style="color: red"></label></center>
                                    <input type="submit" class="btn btn-primary" value="Login" ><br>
                                    
                                </form>
                            </div>
                           <!-- -->
                        </div>
                    </div>
    
                </div>




