<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>halaman Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
     <h1>Log-in</h1><br>
      <form action="login.php" method="post">
        <input type="text" name="user" placeholder="username">
        <input type="password" name="pass" placeholder="password">
            <button>Login</button>
        
      </form>
     <div class="forget">
        <a href="register.php">Register</a> <a href="#">Forget password</a>
     </div>
    </div>

    <style>
    body {
        background-color: #f5f5f5;
    }
    
    .container {
        background-color: #fff;
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        color: #ff0000;
        text-align: center;
    }
    
    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
    }
    
    button {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 10px;
        width: 100%;
        cursor: pointer;
        border-radius: 3px;
    }
    
    button:hover {
        background-color: #c30000;
    }
    
    .forget {
        margin-top: 10px;
        text-align: center;
    }
    
    a {
        color: #ff0000;
        text-decoration: none;
        margin-right: 10px;
    }
    
    a:hover {
        text-decoration: underline;
    }
</style>
</body>
</html>