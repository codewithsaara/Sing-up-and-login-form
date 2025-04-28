<?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "student_portal";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
     }

     // Get form data
     
     $email = $_POST['username'];
     $pass = $_POST['password'];

     // Prepare and bind
     $stmt = $conn->prepare("Select * from tusers where username = ? and password = ?");
     $stmt->bind_param("ss", $email, $pass);
     $stmt->execute();
     $rs = $stmt->get_result();
     // Execute the statement
     if ($rs->num_rows>0) {
         echo "<script>alert('Login Sucessfull')</script>";
     } else {
         echo "<script>alert('Wrong username or Password')</script>";
     }

     // Close the connection
     $stmt->close();
     $conn->close();
 }
 ?>