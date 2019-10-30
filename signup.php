<!DOCTYPE html>
<html>
    <head>
        <title>signup</title>
    </head>
    <style>
        input[type=text], submit {
  width: 50%;
  padding: 12px 20px;
  margin: 7px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
        
    </style>

    <body>
        <div class="container">
            <div class="header">
                <h2>signup</h2>
            </div>
            <form align="center" action="signup.php" method="post">
                <div>
                    <label for="username">Username : </label>
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
                <p>already a user<a href="login.php"><b>Log Sign Up here</b></a></p>
            </form>
        </div>
    </body>
</html>
