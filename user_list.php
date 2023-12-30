<?php
//Database connection
$con = mysqli_connect('localhost', 'root', '', 'my_crud');

//Select all data from database
$selectData = mysqli_query($con, "SELECT * FROM `user`");
?>
<!DOCTYPE html>
<head>
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
   <form class="d-flex">
     <a class="btn btn-outline-info" type="submit" href="add_user.php">Add User</a>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Sr. No.</th>
      <th scope="col">Full Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Birth date</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">State</th>
      <th scope="col">Zip</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $i = 1;
    while ($getData = mysqli_fetch_assoc($selectData)) {
    ?>
    <tr>
      <th scope="row"><?php echo $i ?></th>
      <td> <?php echo $getData['full_name'] ?></td>
      <td> <?php echo $getData['email'] ?></td>
      <td> <?php echo $getData['contact'] ?></td>
      <td> <?php echo $getData['birth_date'] ?></td>
      <td> <?php echo $getData['address'] ?></td>
      <td> <?php echo $getData['city'] ?></td>
      <td> <?php echo $getData['state'] ?></td>
      <td> <?php echo $getData['zip'] ?></td>
      <td>
    <a href="edit_user.php?id=<?php echo $getData['id'] ?>" class="btn btn-success">Edit </a>
    <a href="delete_user.php?id=<?php echo $getData['id'] ?>" class="btn btn-danger">Delete </a>
    </td>
    </tr>
    <?php
    $i++;
     }
    ?>
 </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
