<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
      // Submit these to a database

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "gym";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);

      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{
        //   echo "Connection was successful<br>";
          $sql = "INSERT INTO `sharikgym` (`name`, `age`, `gender`, `email`, `phone`, `others`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

            $result = mysqli_query($conn, $sql);
          

          
          

          // Check for the database creation success
      }
    }
    

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hazaribagh Gym</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg1.jpg" alt="Gym">
    <div class="container">
        <h1>Sharik Fitness Gym</h1>
        <p>Enter your Details to Register in our Gym</p>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone number">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Ask anything"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>



    <script src="index.js"></script>
</body>
</html>