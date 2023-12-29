<?php

$con = mysqli_connect('localhost', 'root', '', 'my_crud');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $selectUser = mysqli_query($con, "SELECT * FROM `user` WHERE id = $userId");
    $edituser = mysqli_fetch_assoc($selectUser);
}

if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
  

    $updateData = mysqli_query($con, "UPDATE `user` SET `full_name`='$full_name',`contact`='$contact',`email`='$email',`birth_date`='$birth_date',`address`='$address',`city`='$city',`state`='$state',`zip`='$zip' WHERE id = $userId");

    if ($updateData) {
        header('Location: user_list.php');
    } else {
        echo "User not updated";
    }

}

?>
<!DOCTYPE html>
<head>
    <title>CRUD Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Edit User</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="user_list.php">User List</a>
        </li>
    </ul>
      <form class="d-flex">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <a class="btn btn-outline-info" type="submit" href="add_user.php">Add User</a>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<h2 class="col-md-12 text-center">Update user</h2>
<form class="row g-3" method="POST" action="#">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="inputEmail4" name="full_name" value="<?php echo $edituser['full_name'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputPassword4" name="email" value="<?php echo $edituser['email'] ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Birth Date</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="" name="birth_date" value="<?php echo $edituser['birth_date'] ?>">
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="" name="contact" value="<?php echo $edituser['contact'] ?>">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="" name="address" value="<?php echo $edituser['address'] ?>">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity" name="city" value="<?php echo $edituser['city'] ?>">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select" name="state" value="<?php echo $edituser['state'] ?>">
      <option selected>Choose...</option>
      <option>Maharashtra</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip" name="zip" value="<?php echo $edituser['zip'] ?>">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
  </div>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
