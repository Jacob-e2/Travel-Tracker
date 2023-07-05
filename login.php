<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Travel Tracker - Login</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="Container">
        <div class="Header">
            <a href="index.html">Home</a>
        </div>

        <div class="Content">
            <form action="login.php" method="post" id="Login_Form">
                <label for="email"><b>Email Address</b></label>
                <input type="email" id="email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" required>

                <button type="submit" id="Login_Button">Login</button>

            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>
</html>