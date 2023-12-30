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
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="code.css" />
  </head>
  <body>
  
    <section class="container">
      <header>Registration Form</header>
      <form action="#" class="form" method="POST">
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" placeholder="Enter full name" name="full_name" value="<?php echo $edituser['full_name'] ?>" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" value="<?php echo $edituser['email'] ?>" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="contact" value="<?php echo $edituser['contact'] ?>" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="birth_date" value="<?php echo $edituser['birth_date'] ?>" required />
          </div>
        </div>
        
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="address" value="<?php echo $edituser['address'] ?>" required />
         <div class="column">
            <div class="select-box">
              <select name="state" value="<?php echo $edituser['state'] ?>">
                <option hidden>State</option>
                <option>Maharastra</option>
                
              </select>
            </div>
            <input type="text" placeholder="Enter your city" name="city" value="<?php echo $edituser['city'] ?>" required />
          </div>
          <div class="column">
           
            <input type="number" placeholder="Enter postal code" name="zip" value="<?php echo $edituser['zip'] ?>" required />
          </div>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
