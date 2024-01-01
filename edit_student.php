<?php

$con = mysqli_connect('localhost', 'root', '', 'my_crud');

if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    $selectStudent = mysqli_query($con, "SELECT * FROM `student` WHERE id = $userId");
    $editStudent = mysqli_fetch_assoc($selectStudent);
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
  

    $updateData = mysqli_query($con, "UPDATE `student` SET `full_name`='$full_name',`contact`='$contact',`email`='$email',`birth_date`='$birth_date',`address`='$address',`city`='$city',`state`='$state',`zip`='$zip' WHERE id = $userId");

    if ($updateData) {
        header('Location: student_list.php');
    } else {
        echo "Student not updated";
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
          <input type="text" placeholder="Enter full name" name="full_name" value="<?php echo $editStudent['full_name'] ?>" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" value="<?php echo $editStudent['email'] ?>" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="contact" value="<?php echo $editStudent['contact'] ?>" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="birth_date" value="<?php echo $editStudent['birth_date'] ?>" required />
          </div>
        </div>
        
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="address" value="<?php echo $editStudent['address'] ?>" required />
         <div class="column">
            <div class="select-box">
              <select name="state" value="<?php echo $editStudent['state'] ?>">
                <option hidden>State</option>
                <option>Maharastra</option>
                
              </select>
            </div>
            <input type="text" placeholder="Enter your city" name="city" value="<?php echo $editStudent['city'] ?>" required />
          </div>
          <div class="column">
           
            <input type="number" placeholder="Enter postal code" name="zip" value="<?php echo $editStudent['zip'] ?>" required />
          </div>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
