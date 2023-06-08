<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    body {
      background-color: #f1f1f1;
      font-family: Arial, sans-serif;
      text-align: center;
    }
    
    .login-container {
      margin: 150px auto;
      width: 300px;
      padding: 20px;
      background-color: #ffffff;
      border-radius: 5px;
      box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
    }
    
    .login-container h2 {
      margin-bottom: 20px;
    }
    
    .login-container input[type="text"],
    .login-container input[type="password"],
    .login-container input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 3px;
    }
    
    .login-container input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      cursor: pointer;
    }
    
    .login-container input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <input type="text" name="username" placeholder="Enter your username" required><br>
      <input type="password" name="password" placeholder="Enter your password" required><br>
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
