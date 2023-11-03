<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Newsletter</title>
    <link rel="stylesheet" href="/PHP/Projet02/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 300px 0px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
        }
        h1 {
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #0073e6;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php    include(__DIR__ . '/includes/header.php');    ?>
    <div class="container">
        <h1>Subscribe to our newsletter</h1>
        <form action="/PHP/Projet02/includes/newsletter.inc.php" method="post">
            <label for="email">Email Address :</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="Subscribe">
        </form>
    </div>
</body>
</html>