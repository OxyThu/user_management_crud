<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <div class="container mt-5 mx-auto w-50">

    <?php if(isset($_GET['registered'])):?>
        <div class="alert alert-success">
            Accont Created . Please Login
        </div>
    <?php endif ?>

    <?php if(isset($_GET['suspended'])):?>
        <div class="alert alert-danger">
            Your Account is suspended
        </div>
    <?php endif ?>

    <?php if(isset($_GET['incorrect'])) : ?>
        <h2 class="alert-success">Your Email or Password is incorrect</h2> 
    <?php endif ?>
    
    <h1 class="my-5 ">Login Form</h1>
    <form action="_actions/login.php" method="post">
    <label for="email" class="form-label">Enter Your Email</label>
    <input type="email" name="email" id="email" class="form-control" required>
    <label for="password" class="form-label">Enter Your Password</label>
    <input type="password" name="password" id="password" class="form-control" required>
    <br>
    <button type="submit" class="btn btn-secondary">LOGIN</button> 
    <a href="register.php">Register</a>
    </form>
   
    </div>
</body>
</html>