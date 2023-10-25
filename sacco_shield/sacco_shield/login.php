<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>SACCO</title>

    <?php include('./header.php'); ?>
    <?php include('./db_connect.php'); ?>
    <?php 
        session_start();
        if(isset($_SESSION['login_id'])) {
            header("location:index.php?page=home");
        }
    ?>
</head>
<style>
    body {
        width: 100%;
        height: 100vh;
        /* background: #007bff; Change background color as needed */
        margin: 0;
        padding: 0;
        overflow: hidden; /* Prevent scrolling */
        display: flex;
        justify-content: center;
        align-items: center;
		/* background-image: url('sacco_shield/assets/img/backgroung.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; Optional, for a fixed background */
    }

    main#main {
        width: 100%;
        max-width: 400px; /* Limit the maximum width */
        background-color: rgba(255, 255, 255, 0.9); /* Add transparency to the background color */
        border-radius: 10px;
        padding: 20px;
    }

    .logo {
        text-align: center;
        margin-bottom: 20px;
    }

    .logo img {
        width: 100%;
        max-width: 350px;
    }

    #login-form {
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        background-color: #007bff; /* Match the main background color */
        color: #fff;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .contact-us {
        text-align: center;
        margin-top: 20px;
    }

    .badge-warning {
        background-color: #ffc107; /* Yellow badge color */
        color: #000;
    }
</style>
<body>
    <main id="main">
        <div id="login-right">
            <div class="card">
                <div class="card-body">
                    <div class="logo">
                        <img src="assets/img/logo.png" alt="Logo">
                    </div>
                    <form id="login-form">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-primary">Login</button>
                    </form>
                
					<div class="contact-us" style="text-align: center; margin-top: 20px;">
    <span class="badge badge-warning" style="background-color: #ffc107; color: #000; padding: 5px 10px; border-radius: 5px; font-weight: bold;">Contact Us</span>:
    <a href="mailto:tonyojelel@gmail.com" style="text-decoration: none; color: #007bff; font-weight: bold; margin-left: 10px; transition: color 0.3s;">Contact support</a>
</div>
                </div>
            </div>
        </div>
    </main>
</body>
<script>
    // Add your JavaScript code here if needed
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else if(resp == 2){
					location.href ='voting.php';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})

</script>
</html>















