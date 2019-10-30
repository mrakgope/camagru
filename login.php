<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <style>
        div {
            padding : 5px;
            border-radius: 10px
        }
       
    </style>
    <body>
        <div class="container">
            <div class="header">
                <h2>login</h2>
            </div>
            <form align="center" action="login.php" method="post">
                <div>
                    <label for="username">Username : </label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="password">Password : </label>
                    <input type="text" name="Password_1" required>
                </div>
                <button type="submit" name="login_user">Log In</button>
                <p>Not a User<a href="Signup.php"><b>Log Sign Up here</b></a></p>
            </form>
        </div>
    </body>
</html>
