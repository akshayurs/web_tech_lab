<!DOCTYPE html>
<html>
<head>
    <title>Date Display</title>
    <style>
        h1 {
            text-align: center;
        }
        date {
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Today's Date is
        <date>
            <?php
            $today = date("d-m-Y");
            echo "Today's Date: " . $today;
            ?>
        </date>
    </h1>
</body>
</html>