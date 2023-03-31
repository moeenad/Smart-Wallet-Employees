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
    <title>Smart Wallet: Employee Profile</title>
  </head>
<body>
  <section class="h-100 bg-light">
    <div class="container py-5 h-200">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                        <img src="images/view.jpg"
                                alt="Profile photo" class="img-fluid"
                                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>

                        <div class="col-xl-6 align-self-center">
                            <div class="card-body p-5 text-black">
                                
                                <?php
                                    include ('connection.php');
                                    $id = $_GET['id'];
                                    if($id){
                                    $sql = "SELECT * FROM employee WHERE id = $id";
                                    $resultSet = mysqli_query($conn, $sql);
                                    while($data = mysqli_fetch_array($resultSet)) {
                                ?>
                                <h3>Information of:<br>
                                <strong> <?php echo $data['firstName'] . ' ' . $data['lastName'] ?></strong></h3>
                                <br><br><br>
                                    <p><strong>Employee ID: </strong><?php echo $data['id'] ?></p>
                                    <p><strong>First Name: </strong><?php echo $data['firstName'] ?></p>
                                    <p><strong>Last Name: </strong><?php echo $data['lastName'] ?></p>
                                    <p><strong>Email ID: </strong><?php echo $data['userName'] ?></p>
                                    <p><strong>Mobile: </strong><?php echo $data['mobile'] ?></p>
                                    <p><strong>Gender: </strong><?php echo $data['gender'] ?></p>
                                    <p><strong>Address: </strong><?php echo $data['address'] ?></p>
                                
                                <div class="d-flex justify-content-end pt-3">
                                    <a href="index.php" class="btn btn-info">Employee List</a>&nbsp;
                                    <a href="update.php?id=<?php echo $data['id'] ?>" class="btn btn-success bi bi-pencil-square"> Edit</a>&nbsp;
                                    <a href="delete.php?id=<?php echo $data['id'] ?>" class="btn btn-danger bi bi-trash"> Delete</a>
                                </div>
                                    <?php
                                    }
                                    } else {
                                    echo "<p>No employee found!</p>";
                                    ?>
                                    <div class="d-flex justify-content-end pt-3">
                                        <a href="index.php" class="btn btn-info">Employee List</a>
                                    </div>
                                    <?php
                                    }
                                    ?>

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
