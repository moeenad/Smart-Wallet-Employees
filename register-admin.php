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
    <title>Smart Wallet: Admin Registration</title>
  </head>
<body>
  <section class="h-100 bg-light">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                        <img src="images/register-admin.jpg"
                                alt="Employees photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>

                        <div class="col-xl-6 align-self-center">
                            <div class="card-body p-5 text-black">
                                <h3>Admin Registration</h3>
                                <p class="italic">All fields are required.</p>
                                <br />
                                <form id="myForm" action="process.php" method="post">

                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <label class="myLable">First Name*</label>
                                            <input type="text" name="firstName" id="typeFirstName" class="form-control form-control-md bFrame" required />
                                            <label id="lblFirstName" class="labelError">First Name required </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <lable class="myLable">Last Name*</lable>
                                            <input type="text" name="lastName" id="typeLastName" class="form-control form-control-md bFrame" required />
                                            <label id="lblLastName" class="labelError">Last Name required</label>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <lable class="myLable">Email*</lable>
                                            <input type="email" name="userName" id="typeRegEmail" class="form-control form-control-md bFrame" placeholder="email@domain.com" required />
                                            <label class="labelError" id="lblRegEmail">Correct Email required.</label>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline"">
                                            <lable class="myLable">Role*</lable>
                                            <select class="form-select form-select-md bFrame" name="role" id="typeRoleSelect">
                                                <option value="">Select One</option>
                                                <option value="Administrator">Administrator</option>
                                                <option value="CEO Manager">CEO Manager</option>
                                                <option value="Branch Manager">Branch Manager</option>

                                            </select>
                                            <label class="labelError" id="lblRole">Gender is required.</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">    
                                            <lable class="myLable">Branch No.*</lable>
                                            <input type="text" name="branch" id="typeRegBranch" class="form-control form-control-md bFrame" placeholder="SW0001" required />
                                            <label class="labelError" id="lblRegBranch">Branch Number has to be in this format: SW0001.</label>
                                            </div>
                                        </div>
                                        </div>


                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">    
                                            <label class="myLable">Create Password*</label>
                                            <button class="btnShowHide" type="button" id="toggleRegPassword">Show</button>
                                            <input type="password" name="password" id="typeRegPassword" class="form-control form-control-md bFrame" required />
                                            <label class="labelError" id="lblRegPassword">
                                                Password must be: minimum 8 characters, One uppercase
                                                letter, one lowercase letter, one number, and one
                                                special character.
                                            </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <label class="myLable">Confirm Password*</label>
                                            <button class="btnShowHide" type="button" id="toggleRegConfirmPassword">Show</button>
                                            <input type="password" id="typeRegConfirmPassword" class="form-control form-control-md bFrame" required/>
                                            <label class="labelError" id="lblRegConfirmPassword">
                                                The password confirmation does not match.
                                            </label>
                                            </div>
                                        </div>
                                        </div>
                                        
                                        <div class="d-flex justify-content-end pt-3">
                                            <input class="btn btn-secondary mb-4" type="submit" value="Clear All" onclick="clearForm()">&nbsp; &nbsp;
                                            <input class="btn btn-dark mb-4" type="submit" name="admin" value="Register" onclick="validateAdmin();">
                                        </div>   
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
