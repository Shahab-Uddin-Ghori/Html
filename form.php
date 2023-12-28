<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User Information</title>
</head>
<body>
  <h1>User Information</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = $_POST['name'];
      $fatherName = $_POST['fname'];
      $email = $_POST['Email'];
      $password = $_POST['password'];
      $dateOfBirth = $_POST['date-of-birth'];
      $gender = $_POST['Gender'];

      echo "<p>Name: $name</p>";
      echo "<p>Father's Name: $fatherName</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Password: $password</p>";
      echo "<p>Date of Birth: $dateOfBirth</p>";
      echo "<p>Gender: $gender</p>";
  }
  ?>
</body>
</html>
