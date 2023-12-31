<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!--Bostrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="assets/css/user-login_register.css">

</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center text-warning">Login Here</h3>
                <form>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-warning btn-block">Login</button>
                    <br>
                    <p><a href="forgot_password.php" class="text-warning">Forgot password</a></p>
                    <p>Do not have an Account <a href="user-register.php" class="text-warning">Register Here</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>