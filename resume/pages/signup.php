<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/loginh.css">
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>

    <div id="middle-bubble">
        <img src="../images/signup.png" alt="Signup Photo" class="log-sign-image">
        <div id="heading1">
            <h1>Sign Up</h1>
        </div>

        <div id="heading2">
            <h2>Already have an account? <a href="../index.php" style="text-decoration: none;color:white";>Log in!</a></h2>
        </div>

        <div id="content">
            <form action="../BE/signup.php" method="post">

                <div id="username-input">
                    <label for="username">Username:</label>
                    <input type="text" name="username" required>
                </div>
                
                <div id="fullname-input">
                    <label for="fullName">Full Name:</label>
                    <input type="text" name="fullname" required />
                </div>

                <div id="password-input">
                    <label for="password">Password:</label>
                    <input type="password" name="pass" required />
                </div>

                <div id="sex-input">          
                    <label for="sex">Sex:</label>
                    <select name="sex" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div id="dob-input">
                    <label for="dob">Date of Birth:</label>
                    <input type="date" name="birthdate" required />
                </div>
                
                <button type="submit">Signup</button>
                
            </form>
        </div>
    </div>

</body>
</html>
