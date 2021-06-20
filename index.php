<!DOCTYPE html>
<html>
    <head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <!-- style css file-->
    <link rel="stylesheet" href="CSS/style.css">
       
    </head>
    <body>
        <div class="sidenav">
            <div class="login-main-text">
               <h2>Freelance<br> Login Page</h2>
               <p>Login or register from here to access.</p>
            </div>
         </div>
         <div class="main">
            <div class="col-md-6 col-sm-12">
               <div class="login-form">
                  <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST"">
                     <div class="form-group">
                        <label>User Name</label>
                        <input type="text" class="form-control" placeholder="User Name" id="user" name="username">
                     </div>
                     <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" id ="pass" name  = "password">
                     </div>
                     <input type =  "submit" id = "login" value = "Login" class="btn btn-black my-3" />
                    
         
                     <button type="submit" id="signup" class="btn btn-black my-3"><a href ="signup.php">Seller Register</a></button>

                     <button type="submit" id="signup_tech" class="btn btn-black my-3"><a href ="signup.php">Buyer Register</a></button>
      
                  </form>
               </div>
            </div>
         </div>
         
    </body>
</html>

