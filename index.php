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
    <title>Smart Wallet: Our Employees</title>
  </head>
<body>
  <section class="h-100 bg-light">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-12 align-self-center">
                            <div class="card-body p-5 text-black">
                                <div class="d-flex justify-content-center">
                                <h3>Smart Wallet Employees</h3>
                                </div>
                                <br>
                                <img src="images/main-banner.jpg" class="img-fluid" alt="Coding">
                                <br><br>
                                <?php session_start(); ?>

                                <!-- Register Session -->
                                <?php
                                    if(isset($_SESSION['register'])){
                                ?>
                                    <div class="alert alert-success">
                                <?php 
                                    echo $_SESSION['register'];
                                ?>
                                    </div>
                                <?php
                                    unset($_SESSION['register']);
                                    }
                                ?>

                                <!-- Admin Session -->
                                <?php
                                    if(isset($_SESSION['admin'])){
                                ?>
                                    <div class="alert alert-success">
                                <?php 
                                    echo $_SESSION['admin'];
                                ?>
                                    </div>
                                <?php
                                    unset($_SESSION['admin']);
                                    }
                                ?>

                                    <!-- Update Session -->
                                <?php
                                    if(isset($_SESSION['update'])){
                                ?>
                                    <div class="alert alert-success">
                                <?php 
                                    echo $_SESSION['update'];
                                ?>
                                    </div>
                                <?php
                                    unset($_SESSION['update']);
                                    }
                                ?>

                                    <!-- Delete Session -->
                                <?php
                                    if(isset($_SESSION['delete'])){
                                ?>
                                    <div class="alert alert-danger">
                                <?php 
                                    echo $_SESSION['delete'];
                                ?>
                                    </div>
                                <?php
                                    unset($_SESSION['delete']);
                                    }
                                ?>
                                <br>
                                <table class="table">
                                     <thead>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Employee Name
                                        </th>
                                        <th>
                                            Mobile
                                        </th>
                                        <th>
                                            Gender
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            include ('connection.php');
                                            $sql = "SELECT * FROM employee";
                                            $resultSet = mysqli_query($conn, $sql);
                                            while ($data = mysqli_fetch_array($resultSet)){
                                        ?>
                                        <tr>
                                            <td><?php echo $data['id'] ?></td>
                                            <td><?php echo $data['firstName'] . ' ' . $data['lastName'] ?></td>
                                            <td><?php echo $data['mobile'] ?></td>
                                            <td><?php echo $data['gender'] ?></td>
                                            <td><?php echo $data['address'] ?></td>
                                            <td><a href="view.php?id=<?php echo $data['id'] ?>" class="btn btn-info bi bi-view-list"> View</a>
                                                <a href="update.php?id=<?php echo $data['id'] ?>" class="btn btn-success bi bi-pencil-square"> Edit</a>
                                                <a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger bi bi-trash"> Delete</a>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>  
                                <div>
                                    <a href="register.php" class="btn btn-dark bi bi-person-plus"> Add New Employee</a>
                                </div>
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
