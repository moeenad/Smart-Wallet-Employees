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
    <title>Smart Wallet: Edit Employee</title>
  </head>
<body>
  <section class="h-100 bg-light">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                        <img src="images/update.jpg"
                                alt="Employees photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>

                        <div class="col-xl-6 align-self-center">
                            <div class="card-body p-5 text-black">
                                <form id="myForm" action="process.php" method="post">
                                    <?php
                                        $id = $_GET['id'];
                                        if($id){
                                            include('connection.php');
                                            $sql = "SELECT * FROM employee WHERE id = $id";
                                            $resultSet = mysqli_query($conn, $sql);
                                            $data = mysqli_fetch_array($resultSet);
                                    ?>
                                    <h3>Edit Employee<br>
                                        <strong><?php echo '#' . $data['id'] . ': ' . $data['firstName'] . ' ' . $data['lastName'] ?></strong></h3>
                                        <p class="italic">All fields are required.</p>
                                        <br />
                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <label class="myLable">First Name*</label>
                                            <input type="text" name="firstName" id="typeFirstName" class="form-control form-control-md bFrame" value="<?php echo $data['firstName'] ?>" />
                                            <label id="lblFirstName" class="labelError">First Name required </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                            <lable class="myLable">Last Name*</lable>
                                            <input type="text" name="lastName" id="typeLastName" class="form-control form-control-md bFrame" value="<?php echo $data['lastName'] ?>" />
                                            <label id="lblLastName" class="labelError">Last Name required</label>
                                            </div>
                                        </div>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <lable class="myLable">Email*</lable>
                                            <input type="email" name="userName" id="typeRegEmail" class="form-control form-control-md bFrame" placeholder="email@domain.com" value="<?php echo $data['userName'] ?>" />
                                            <label class="labelError" id="lblRegEmail">Correct Email required.</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <lable class="myLable">Address*</lable>
                                            <input type="text" name="address" id="typeAddress" class="form-control form-control-md bFrame" placeholder="123 Street Name" value="<?php echo $data['address'] ?>" />
                                            <label id="lblAddress" class="labelError">Street Address is required</label>
                                        </div>

                                        <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline"">
                                            <lable class="myLable">Gender*</lable>
                                            <select class="form-select form-select-md bFrame" name="gender" id="typeGenderSelect">
                                                <option value="">Select One</option>
                                                <option value="Male" <?php if($data["gender"] == "Male") {echo "selected";}?>>Male</option>
                                                <option value="Female" <?php if($data["gender"] == "Female") {echo "selected";}?>>Female</option>
                                            </select>
                                            <label class="labelError" id="lblGender">Gender is required.</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">    
                                            <lable class="myLable">Mobile Number*</lable>
                                            <input type="text" name="mobile" id="typeMobile" class="form-control form-control-md bFrame" placeholder="(999)999-9999" value="<?php echo $data['mobile'] ?>" />
                                            <label class="labelError" id="lblMobile">Mobile Number required (999)999-9999.</label>
                                            </div>
                                        </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />


                                        <div class="d-flex justify-content-end pt-3">
                                            <a href="index.php" class="btn btn-info mb-4">Employee List</a>&nbsp;
                                            <input class="btn btn-success mb-4" type="submit" name="update" value="Edit Employee">
                                        </div>
                                        <div class="d-flex justify-content-end pt-3">
                                        </div>   
                                    </div>
                                    <?php
                                        }else{
                                            echo "Employee does not exist";
                                        }
                                    ?>
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
