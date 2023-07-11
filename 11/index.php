<!DOCTYPE html>
<html>
<head>
    <title>Thoughts</title>
    <style>
        body {
            background: #eee;
        }

        label {
            display: block;
            font-size: 25px;
        }

        button {
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = $_POST["info"];
        $info_file = fopen("info.txt", "w");
        fwrite($info_file, $info);
        fclose($info_file);
    }
    ?>
    <form method="POST">
        <label>Information:</label>
        <textarea rows="20" cols="80" name="info">
    </textarea>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
        <div class="saved">
            <h1>Saved Information</h1>
            <?php
            $file = fopen('info.txt', 'r');
            if ($file) {
                while (($line = fgets($file)) !== false) {
                    echo "<p>$line</p>";
                }
                fclose($file);
            }
            ?>
        </div>
    </form>
</body>
</html>