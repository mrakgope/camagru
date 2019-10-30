<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
    </head>
    <body>
        <div class="container">
            <div class="header">   
                <h2 align="center">Sign Up</h2>          
            </div>
            <form align="center" action="signup.php" method="post">
                <div>
                    <label for="username">Username : </label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="firstname">firstname : </label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="last name">last name : </label>
                    <input type="text" name="username" required>
                </div>
                <div>
                    <label for="Email">Email : </label>
                    <input type="text" name="email" required>
                <div>
                    <label for="password">Password : </label>
                    <input type="text" name="Password_1" required>
                </div>
                <div>
                    <label for="password">comfirm password : </label>
                    <input type="text" name="password_2" required>
                </div>
                <button type="submit" name="signup">Sign up</button>
                <p>already a user<a href="login.php"><br>Log In</br></a></p>
            </form>
        </div>
    </body>
</html>
