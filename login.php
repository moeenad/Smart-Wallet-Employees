<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Red+Hat+Display:300,400,600,700&amp;lang=en"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src="smart.js" async></script>
    <title>Smart Wallet: Admin Login</title>
  </head>
<body>
  <section class="h-100 bg-light">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">




                        <div class="col-xl-6 d-none d-xl-block">
                            <img src="images/login.jpg"
                                alt="Employees photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>

                        <div class="col-xl-6 align-self-center">
                            <div class="card-body p-5 text-black">
                                <h3>Admin Login</h3>
                                <br />
                                <form id="myForm" method="post" action="authentication.php">
                                    <div class="form-outline mb-4">
                                        <div class="myLable" align="left">Username</div>
                                        <input type="email" id="typeEmail" name="userName" class="form-control form-control-lg bFrame" placeholder="Email@domain.com" aria-label="Email" required />
                                        <label align="left" class="form-check-label labelError" id="lblEmail">
                                            Wrong email address! Try again with a valid email address.
                                        </label>
                                        </div>

                                        <div class="form-outline mb-4">
                                        <div class="myLable" align="left">Password</div>
                                        <input type="password" id="typePassword" name="password" class="form-control form-control-lg bFrame" placeholder="Password" aria-describedby="Password" required/>
                                        <label class="form-check-label labelError" id="lblPassword">
                                            Wrong password! Try again or reset your password.
                                        </label>
                                        </div>

                                        <div class="form-check d-flex justify-content-start mb-4">
                                        <input class="form-check-input bFrame" type="checkbox" value="" id="form1Example3" />
                                        <label class="form-check-label myLable">&nbsp; Remember password
                                        </label>
                                        </div>
                                    
                                        <div class="d-flex justify-content-end pt-3">
                                        <input id="loginButton" name="login" class="btn btn-dark" type="submit" value="Login" onclick="validateEmailPassword()" />
                                        </div>
                                        <p class="myLable"> Don't have an account? <a href="register-admin.php" class="link-secondary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Register here</a></p>

                                    </div> 
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
    <center>
      <p class="copyright">
        2023 © Smart Wallet. Employee Management System. Designed by Mohammed Enad.
      </p>
    </center>
</body>
</html>
