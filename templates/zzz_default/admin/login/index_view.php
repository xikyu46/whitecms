<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin Login</a>
        </div>
    </div>
    <!-- /container -->
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			&nbsp;
		</div>
		<div class="col-sm-3">
		
                    
                            <form class="form form-vertical" method="post" action="<?= current_url();?>">
                                <div class="control-group">
                                    <label>Username</label>
                                    <div class="controls">
                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label>Passwords</label>
                                    <div class="controls">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label></label>
                                    <div class="controls">
                                        <button type="submit" class="btn btn-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                      
                    
		</div>
		<div class="col-sm-3">
			&nbsp;
		</div>
	</div>
</div>