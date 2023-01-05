<?php
	session_start();
	
	// Check if user is already logged in
	if(isset($_SESSION['loggedIn'])){
		header('Location: index.php');
		exit();
	}
	
	require_once('inc/config/constants.php');
	require_once('inc/config/db.php');
	require_once('inc/header.html');
?>
  <body>

<?php
// Variable to store the action (login, register, passwordReset)
$action = '';
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == 'register'){
?>
			<div class="container">
			  <div class="row justify-content-center">
			  <div class="card" style="margin-top: 100px; width: 450px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
			  <div class="card-header" style="text-align: center; font-weight: bold; cursor: pointer; transition: .5s ease-in-out; font-size: 2.3em">
					Register
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="registerMessage"></div>
					  <div class="form-group">
						<label for="registerFullName">Name<span class="requiredIcon">*</span></label>
						<input type="text" class="form-control" id="registerFullName" name="registerFullName">
						<!-- <small id="emailHelp" class="form-text text-muted"></small> -->
					  </div>
					   <div class="form-group">
						<label for="registerUsername">Username<span class="requiredIcon">*</span></label>
						<input type="email" class="form-control" id="registerUsername" name="registerUsername" autocomplete="on">
					  </div>
					  <div class="form-group">
						<label for="registerPassword1">Password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword1" name="registerPassword1">
					  </div>
					  <div class="form-group">
						<label for="registerPassword2">Re-enter password<span class="requiredIcon">*</span></label>
						<input type="password" class="form-control" id="registerPassword2" name="registerPassword2">
					  </div>
					  <a href="login.php" class="btn btn-outline-primary" style="border-radius: 15px">Login</a>
					  <button type="button" id="register" class="btn btn-outline-success" style="border-radius: 15px">Register</button>
					  <a href="login.php?action=resetPassword" class="btn btn-outline-danger" style="border-radius: 15px">Reset Password</a>
					  <button type="reset" class="btn btn-outline-clear " style="border-radius: 15px">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		} elseif($action == 'resetPassword'){
?>
			<div class="container">
			  <div class="row justify-content-center">
			  <div class="card" style="margin-top: 100px; width: 450px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
			  <div class="card-header" style="text-align: center; font-weight: bold; cursor: pointer; transition: .5s ease-in-out; font-size: 2.3em">
					Reset Password
				  </div>
				  <div class="card-body">
					<form action="">
					<div id="resetPasswordMessage"></div>
					  <div class="form-group">
						<label for="resetPasswordUsername">Username</label>
						<input type="text" class="form-control" id="resetPasswordUsername" name="resetPasswordUsername">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword1">New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword1" name="resetPasswordPassword1">
					  </div>
					  <div class="form-group">
						<label for="resetPasswordPassword2">Confirm New Password</label>
						<input type="password" class="form-control" id="resetPasswordPassword2" name="resetPasswordPassword2">
					  </div>
					  <a href="login.php" class="btn btn-outline-primary" style="border-radius: 15px">Login</a>
					  <a href="login.php?action=register" class="btn btn-outline-success" style="border-radius: 15px">Register</a>
					  <button type="button" id="resetPasswordButton" class="btn btn-outline-danger" style="border-radius: 15px">Reset Password</button>
					  <button type="reset" class="btn btn-outline-clear " style="border-radius: 15px">Clear</button>
					</form>
				  </div>
				</div>
				</div>
			  </div>
			</div>
<?php
			require 'inc/footer.php';
			echo '</body></html>';
			exit();
		}
	}	
?>
	<!-- Default Page Content (login form) -->
    <div class="container">
      <div class="row justify-content-center">
		<div class="card" style="margin-top: 200px; width: 450px; box-shadow: 0 5px 10px rgba(0,0,0,0.2);">
		  <div class="card-header" style="text-align: center; font-weight: bold; cursor: pointer; transition: .5s ease-in-out; font-size: 2.3em">
			LOGIN
		  </div>
		  <div class="card-body" >
			<form action="">
			<div id="loginMessage"></div>
			  <div class="form-group">
				<label for="loginUsername">Username</label>
				<input type="text" class="form-control" id="loginUsername" name="loginUsername">
			  </div>
			  <div class="form-group">
				<label for="loginPassword">Password</label>
				<input type="password" class="form-control" id="loginPassword" name="loginPassword">
			  </div>
			  <button type="button" id="login"  class="btn btn-outline-primary" style="border-radius: 15px">Login</button>
			  <a href="login.php?action=register"  class="btn btn-outline-success" style="border-radius: 15px">Register</a>
			  <a href="login.php?action=resetPassword"  class="btn btn-outline-danger"  style="border-radius: 15px">Reset Password</a>
			  <button type="reset" class="btn btn-light"  style="border-radius: 10px">Clear</button>
			</form>
		  </div>
		</div>
		</div>
      </div>
    </div>
<?php
	require 'inc/footer.php';
?>
  </body>
</html>
