<?php

$con = mysqli_connect('localhost', 'root', '', 'my_crud');


if (isset($_POST['submit'])) {
    $full_name = $_POST['full_name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $birth_date = $_POST['birth_date'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    

    $add = mysqli_query($con, "INSERT INTO `student`(`full_name`, `contact`, `email`,`birth_date`,`address`,`city`,`state`,`zip`) 
    VALUES ('$full_name','$contact','$email','$birth_date','$address','$city','$state','$zip')");
    if ($add) {
        header('Location: student_list.php');
    } else {
        echo "error";
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
          <input type="text" placeholder="Enter full name" name="full_name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" placeholder="Enter email address" name="email" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" placeholder="Enter phone number" name="contact" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" placeholder="Enter birth date" name="birth_date" required />
          </div>
        </div>
        
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="address" required />
         <div class="column">
            <div class="select-box">
              <select name="state">
                <option hidden>State</option>
                <option>Maharastra</option>
                
              </select>
            </div>
            <input type="text" placeholder="Enter your city" name="city" required />
          </div>
          <div class="column">
           
            <input type="number" placeholder="Enter postal code" name="zip" required />
          </div>
        </div>
        <button type="submit" name="submit">Submit</button>
      </form>
    </section>
  </body>
</html>
