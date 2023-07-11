<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            font-family: sans-serif;
            background: #eee;
            text-align: center;
        }
        form {
            background: #fff;
            margin: 0 8rem;
            border: 1px solid;
        }
        label {
            display: block;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 20px;
        }
        input {
            display: block;
            margin: 0 auto;
            padding: 5px;
        }
        button {
            margin: 10px auto;
            display: block;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <h1>Login</h1>
    <form method="POST">
        <label>Username:</label>
        <input name="username">
        <label for="password">Password:</label>
        <input type="password" name="password">
        <button >Login</button>
    </form>
    <script>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uname = $_POST["username"];
            $pass = $_POST["password"];
            $file = fopen("login.txt", "r");

            $content = fgets($file);
            if ($content == $uname . ":" . $pass) {
                echo "alert('Access granted!')";
            } else {
                echo "alert('Incorrect')";
            }
        }
        ?>
    </script>
</body>
</html>