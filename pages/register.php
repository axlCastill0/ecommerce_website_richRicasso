<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR - Login</title>
    <link rel="stylesheet" href="/PHP/Projet02/css/styles.css">
    <link rel="stylesheet" href="/PHP/Projet02/css/login-register.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include(__DIR__ . '/headfoot/header.php'); ?>
    <main>
        <div class="center">
            <h1>Register</h1>
            <form action="/PHP/Projet02/includes/singup.inc.php" method="post">
                <div class="txt_field">
                    <input type="text" name="uid" required>
                    <span></span>
                    <label>Username</label>
                </div>
                <div class="txt_field">
                    <input type="email" name="email" required>
                    <span></span>
                    <label>Email</label>
                </div>
                <div class="txt_field">
                    <input type="password" name="pwd" required>
                    <span></span>
                    <label>Password</label>
                </div>
                <input type="submit" value="Sing up" name="submit">
                <div class="signup_link">
                    Already a member? <a href="/PHP/Projet02/pages/login.php">Login</a>
                </div>
            </form>
        </div>
    </main>
</body>

</html>