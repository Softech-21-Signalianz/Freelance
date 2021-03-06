<?php include('server.php') ?>
<html>
    <head>
<link rel="stylesheet" href="css/log.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>
    <body>
   
<div class="container">
    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Create Account</h4>
        <p class="text-center">Get started with your free account</p>
        <p>
            <a href="" class="btn btn-block btn-gmail"> <i class="far fa-envelope"></i>   Login via Gmail</a>
            <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
        </p>
        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <form method="post" action="signup.php">
        <?php include('errors.php'); ?>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
             </div>
            <input class="form-control" input type="text" name="username" value="<?php echo $username; ?>" placeholder="Username">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
             </div>
            <input class="form-control" placeholder="Email address" type="email" name="email" value="<?php echo $email; ?>">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            
            <input name="phone" class="form-control" placeholder="Phone number" type="text">
        </div> <!-- form-group// -->
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Create password" type="password" name="password_1">
        </div> <!-- form-group// -->
                                            
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="reg_user"> Create Account  </button>
        </div> <!-- form-group// -->      
        <p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
    </form>
    </article>
    </div> <!-- card.// -->
    
    </div> 
    <!--container end.//-->
    
    </body>
</html>