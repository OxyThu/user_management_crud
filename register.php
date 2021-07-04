<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Register Form</h1>
        <?php if(isset($_GET['error'])):?>
            <div class="alert alert-warning">
                Cannot Create Account . Please try again
            </div>
        <?php endif ?>
        <form action="_actions/create.php" method="post">
            <input type="text" name="name" id="name" class="form-control mb-2" placeholder="Name" required>
            <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Email" required>
            <input type="text" name="phone" id="phone" class="form-control mb-2" placeholder="Phone number" required>
            <textarea name="address" id="address" class="form-control mb-2" placeholder="Address" required></textarea>
            <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Password" required>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Regiser</button>
        </form><br>
        <a href="index.php" class="text-decoration-none">Login</a>
    </div>
</body>
</html>