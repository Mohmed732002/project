<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<?php
                if(isset($_SESSION["error"])){
                $error = $_SESSION["error"];
                echo "<div><h3>Username/password is incorrect.</div>";
                }
                ?> 
    <section>
    <div class="login-box">
        <form action="log2.php" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <span class="icon"><ion-icon name="person"></ion-icon></span>
                <input type="text" name="username" required>
                <label>USERNAME</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" required>
                <label>PASSWORD</label>
            </div>
            
            <button type="submit">Login</button>
            
            <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </form>
    </div>
    </section>
</body>
</html>