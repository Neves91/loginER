<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<style>

			body,html {margin:0; padding:0; height:100%;}

			body {
	font-family: Arial, Helvetica, sans-serif;
	background-color: #333333;
}

			input[type=text], input[type=password] {
  				width: 100%;
  				padding: 12px 20px;
  				margin: 8px 0;
  				display: inline-block;
  				border: 1px solid #ccc;
  				box-sizing: border-box;
			}

			button {
				background-color: #999999;
  				color: white;
  				padding: 14px 20px;
  				margin: 8px 0;
  				border: none;
  				cursor: pointer;
  				width: 100%;
			}

			button:hover {
  				opacity: 0.8;
			}

			.container {
  				padding: 16px;
			}

			.h-100 {
				height:100%!important;
				display: flex!important;
			}

			.form_box{
				min-height:429px;
				width: 650px;
				margin-top: auto;
				margin-bottom: auto;
				margin-left:auto;
				margin-right:auto;
				background: white;
				position: relative;
				display: flex;
				justify-content: center;
				flex-direction: column;
				padding: 10px;
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
				border-radius: 5px;
			}
		
</style>

<script>
			$(document).ready(function(){

				$('.error-msg2').css('display', 'none');		

				$('.forgot-passs').click(function () {

					var valor_username = $('input[type=text][name=username]').val();

					if(valor_username == '') {
						$('.error-msg2').css('display', 'inline');		
					} else {
						$('.error-msg1').css('display', 'none');
						$('.error-msg2').css('display', 'none');
				
						window.location = 'esqueceu_password.php?username=' + valor_username;
					}
				});
			});
</script>

</head>

<body>
   <?php
    $erro = false;
    if(isset($_GET['erro'])){$erro = true;}
	//echo "passou aqui e o erro = $erro <br>";
    ?>

		
		<div class="h-100">
			<div class= "form_box">
				<div style="height:150px; text-align:center;">
			    		<img src="images/logo.jpg" width="600" height="150">
				</div>
  				<form action="login.php" method="POST">
    					<div class="container">
      						<label for="username"><b>Username</b></label>
      						<input type="text" placeholder="Introduza o username" name="username" required>

      						<label for="password"><b>Password</b></label>
      						<input type="password" placeholder="Introduza a password" name="password" required>
						<?php
							if($erro){
						echo "<p class=\"error-msg1\" style=\"color:red;\">ERRO! Esse utilizador e/ou password não existem.</p>"; 
						}
						?>	  
						<p class="error-msg2" style="display:none; color:red;">O username é obrigatório.</p>      

      						<button type="submit">Login</button>
    					</div>
  				</form>
				<div style="text-align:center">
				<!-- <label class='forgot-passs' style='font-size:12px; cursor:pointer;'>Esqueceu-se da password?</label> -->
				</div>
			</div>
		</div>
	


</body>
</html>
