<?php 
	
	session_start();
// echo md5('secret');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<script src="asset/js/jquery.js"></script>
	<script src="asset/js/bootstrap.js"></script>
	<style type="text/css">
		.search-background img {
		    width: 100%;
		}
		.well-searchbox {
		  min-height: 20px;
		  min-width: 400px;
		  padding: 19px;
		  position: absolute;
		  z-index: 80;
		  top: 190px;
		  /*right: 100px;*/
		  margin-left: 150px;
		  background: rgba(0, 0, 0, 0.6);
		  margin-bottom: 20px;
		  border: 1px solid #e3e3e3;
		  border-radius: 4px;
		  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
		          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
		}
		.mg{
			margin-bottom: 10px;
			overflow: hidden;
		}

		.well-searchbox label {
		    color: #fff;
		}
	</style>
</head>
<body style="background-image: url('asset/images/login-bg.jpg'); background-size: cover;">
			<div class="search-background">
        </div>
            <div class="well-searchbox">
                <form action="process/login.php" method="post">
                	<div class="form-group"  style="text-align: center">
                		<label class="control-label" style="font-size: 3rem">Login</label>
                	</div>
                    <div class="form-group mg">
                        <label class="col-md-4 control-label">Username</label>
                        <div class="col-md-8">
                            <input type="text" name="username" class="form-control">
                        </div>
                    </div>
                    <div class="form-group mg">
                        <label class="col-md-4 control-label">Password</label>
                        <div class="col-md-8">
                            <input type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-offset-4 col-sm-5">
                        <input type="submit" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
</body>
</html>