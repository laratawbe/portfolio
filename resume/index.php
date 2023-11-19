<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="./css/loginh.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <div id="middle-bubble">
        <img src="./images/login.png" alt="Login Photo" class="log-sign-image">
        <div id="heading1">
            <h1>Login</h1>
        </div>

        <div id="heading2">
            <h2>Don't Have an Account? <a href="./pages/signup.php" style="text-decoration: none;color:white";>SIGN UP!</a></h2>
        </div>

        
        

        <div id="content">
                <form action="BE/login.php" method="post">

                    <div id="username-input">
                        <label for="username">Username:</label>
                        <input type="text" name="username" required>
                    </div>
                    
                    <div id="password-input">
                        <label for="password">Password:</label>
                         <input type="password" name="password" required>
                    </div>
                   
                    <button type="submit">Continue</button> 
                </form>


        </div>
    </div>




 

</body>
</html>
