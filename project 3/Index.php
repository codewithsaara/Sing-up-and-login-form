<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
      body {
  font-family: Arial, sans-serif;
  background: #f0f4f8;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  margin: 0;
}

.container {
  display: flex;
  justify-content: space-between;
  background: #fff;
  padding: 40px;
  border-radius: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  width: 800px;
  gap: 40px;
}

.form-box {
  width: 100%;
}

.form-box h2 {
  margin-bottom: 20px;
  color: #333;
}

.form-box input[type="text"],
.form-box input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.form-box input[type="submit"],
.form-box button {
  width: 100%;
  padding: 10px;
  background-color: #28a745;
  border: none;
  border-radius: 5px;
  color: white;
  font-size: 16px;
  cursor: pointer;
}

.form-box input[type="submit"]:hover,
.form-box button:hover {
  background-color: #218838;
}

.link {
  font-size: 14px;
  margin-top: 10px;
  color: #555;
}

.link a {
  color: #007bff;
  text-decoration: none;
}

.link a:hover {
  text-decoration: underline;
}




    </style>
</head>
<body>
<div class="container">
  <div class="form-box">
   
      
      <!-- Registration-->
      <div class="card shadow p-5 animated zoomIn slow">
      <h3 class="text-center font-weight-bold text-uppercase mb-3">SIGN UP</h3>
      
      <form action="TeachTre.php" method="POST">
        <div class="form-group">
          <label>Enter Username</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label>Enter Password</label>
          <input type="password" class="form-control" name="password">
        </div>
         <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" class="form-control" name="confirm_password">
        </div>
        <button type="submit" class="btn btn-outline-dark btn-block rounded-pill">Register</button>
        <h6 class="mt-3">Don't have an account? <a href="#"> Create Account Here</a></h6>
      </form>
   
      </div>
    </div>
    
    
    
    
    
    
      <div class="form-box">
      
      <!-- Login-->
      <div class="card shadow animated zoomIn slow p-5">
      <h3 class="text-center font-weight-bold text-uppercase mb-3">Login Here</h3>
      
      <form action="login.php" method="POST">
        <div class="form-group">
          <label>Enter Username</label>
          <input type="text" class="form-control" name="username">
        </div>
        <div class="form-group">
          <label>Enter Password</label>
          <input type="password" class="form-control" name="password">
        </div>
         
        <button type="submit" class="btn btn-outline-dark btn-block rounded-pill">Login</button>
        </form>
         <h6 class="mt-3">Don't have an account? <a href="#"> Create Account Here</a></h6>
        <p class="text-center mt-3"> or Login with<p>
        <div class="text-center">
          <i class="fab fa-facebook mx-2 fa-2x"></i>
          <i class="fab fa-twitter  mx-2 fa-2x"></i>
          <i class="fab fa-instagram  mx-2 fa-2x"></i>
          <i class="fab fa-google  mx-2 fa-2x"></i>
        </div>
   
      </div>
    </div>
  
  </div>
</div>
</body>
</html>