<h2>Add User</h2>
               
               
               
<form role="form" id="admin-addon" class="manager-form">
                <div class="form-group" id="us-info">
            <label for="sel1">User Type:</label>
            <select class="form-control" name="type" id="sel1">
                <option value="3">Admin</option>
                <option value="4">Receptionist</option>
            </select>
            </div>
                  
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="username" name="username" ><br>
                        <label style="color:red;" id="user" ></label> 

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" >
                        <label style="color:red;" id="email" ></label>
                    </div>
                    <div class="form-group">
                        <label>Gender</label><t/>
                        <div class="radio">
                            <label><input type="radio" name="gender" value="male" selected>Male </label>
                            <label><input type="radio" name="gender" value="female" >Female </label>
                            <label style="color:red;" id="genderr" ></label>
                        </div>
                    </div>
                    {{ Form::label('Birthday') }}<br>
                    {{ Form::selectRange('day', 1, 31) }}
                    {{ Form::selectMonth('month') }}
                    {{ Form::selectRange('year', 1946,2016) }}<br><br>
                    
                    
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="phone" name="phone" >
                        <label style="color:red;" id="phone" ></label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <label style="color:red;" id="password" ></label>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword">
                         <label style="color:red;" id="confirm" ></label> 

                    </div>
                    <br/>
                    <label style="color:green;" id="subsuc" ></label>
                    <input type="submit" class="btn-primary btn-lg btn-block" value="confirm">
                    
               </form>