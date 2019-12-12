<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="js.js"></script>
<!-- Title  -->
    <title>Sign-In</title>
<!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
	<div class="Signin-page">
		<div class="pictureDart">
			<img src="dart.jpg">
		</div>
        <h1 class="title_text">Se connecter</h1>
		<div class="Signin_Container">
			<div class="Signin_Container">
				<div class="Form-Signin">
					<h1 class="Create-text"> Login </h1>

                            <form action="pwd.php" method="post" >
                                <div class="row">
                                     <div class="col-12 mb-4">
                                        <label for="email_address">Email <span>*</span></label>
                                        <input type="text"  name="user" >
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="Password">Mot de passe <span>*</span></label>
                                        <input type="Password" class="form-control mb-3" id="street_address" value="" name="pwd">
                                    </div>
                                </div>
                                <div class="Forgot">
                                    <a href="Forgot.php" class="blue ignore-validation" target="_self">Mot de passe oublié?</a>
                                </div>
                                <div class="signin-button">
                                <button onclick="" value="submit" id="submit-form-button" class="btn" type="submit" style="width: 421px;"> Se connecter </button>
                    
                                  </div>
                            </form>
				</div>
			</div>
		<div class="Created-account">
			<p class="Already">Vous n'avez pas de compte? <a href="http://localhost/Projet/views/Signup.php" class="Login-button">S'inscrire</a></p>
		</div>
		</div>
		
	</div>

</body>
</html>