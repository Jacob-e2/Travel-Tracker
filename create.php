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
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="Create_Form">
                
                <label for="name"><b>Name</b></label>
                <input type="text" id="name" name="name" required>
            
                <label for="email"><b>Email Address</b></label>
                <input type="email" id="email" name="email" required>

                <label for="password"><b>Password</b></label>
                <input type="password" id="password" name="password" required>

                <button type="submit" id="Create_Button">Login</button>

            </form>
        </div>
    </div>


    <script src="script.js"></script>

    <?php
    $name = "";
    $email = "";
    $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = clean($_POST["email"]);
        $password = clean($_POST["password"]);
        $name = clean($_POST["name"]);

    }

    function clean($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
}
?>
</body>
</html>